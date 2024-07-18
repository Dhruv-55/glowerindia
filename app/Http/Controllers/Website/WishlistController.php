<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    
    public function index(Request $request){
        return view('website.product.wishlist',[
            'wishlist_items' => Wishlist::where('user_id',Session::get('user')->id)->get() 
        ]);
    }
}
