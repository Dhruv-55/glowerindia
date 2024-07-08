<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
// use App\Http\Middleware\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('post')){

            $this->validate($request,[
                'username'=>'required',
                'password' => 'required'
            ]);

            if( !$user = User::where('username',$request->email)->orWhere('email',$request->email)->first() )
            return redirect()->back()->with(['error' => 'user Not Found']);

         if( ! Hash::check($request->password,$user->password) )   
             return redirect()->back()->with(['error' => 'Invalid Password']);

        if($user->status == User::INACTIVE)
            return redirect()->back()->with(['error' => 'Your Account Is In Active..Kindly Contact Developers']);


        session(['user' => $user]);
        return redirect()->route('admin-dashboard')->with(['success' => 'Login Successful']);
    
        }

        return view('user.login');
    }



    public function GoogleLogin(Request $request){

      return  Socialite::driver('google')->redirect();

    }

    public function GoogleCallback(Request $request)
    {
        try {
            // Retrieve user information from Google
            $user = Socialite::driver('google')->user();
    
            // Check if the user with this email already exists
            $existingUser = User::where('email', $user->getEmail())->first();
    
            if (!$existingUser) {
                // If user does not exist, create a new one
                $google_user = User::updateOrCreate(
                    ['google_id' => $user->getId()],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName() . '@' . $user->getId())
                    ]
                );
            } else {
                // If user exists, update the google_id
                $existingUser->update([
                    'google_id' => $user->getId()
                ]);
                
                // Retrieve the user again to be sure it's up to date
                $google_user = $existingUser;
            }
    
            // Store the user in the session
            session(['user' => $google_user]);
    
            // Redirect to home with success message
            return redirect()->route('website-home')->with(['success' => 'Login Successful']);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Google callback error: ' . $e->getMessage());
    
            // Redirect back with an error message
            return redirect()->route('website-home')->with(['error' => 'Login Failed. Please try again.']);
        }
    }
 
}
