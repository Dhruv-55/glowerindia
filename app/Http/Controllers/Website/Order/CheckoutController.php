<?php

namespace App\Http\Controllers\Website\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index(Request $request){
        return view('website.order.checkout',[
            'cart_items' => Cart::where('user_id',Session::get('user')->id
            )->get()
        ]);
    }
}
