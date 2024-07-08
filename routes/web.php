<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ProductController;
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
});
