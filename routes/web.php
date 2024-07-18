<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\Order\CartController;
use App\Http\Controllers\Website\Order\CheckoutController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'home'])->name('website-home');


Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class,'index'])->name('website-product-view');
    Route::get('/detail/{slug}',[ProductController::class,'detail'])->name('website-product-detail');
});

Route::group(['middleware' => 'user'],function(){
    Route::prefix('wishlist')->group(function(){
        Route::get('/',[WishlistController::class,'index'])->name('website-product-wishlist');
    });

    Route::prefix('cart')->group(function(){
        Route::get('/',[CartController::class,'index'])->name('website-product-cart');
    });

    Route::prefix('order')->group(function(){
        Route::get('checkout',[CheckoutController::class,'index'])->name('website-product-checkout');
    });
});


   

