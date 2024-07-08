<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'],function(){
    Route::match(['get', 'post'], '/', [LoginController::class, 'login'])->name('admin-login');

    Route::get('/logout',[LoginController::class,'logout'])->name('admin-logout');

    Route::group(['middleware' => 'admin'],function(){
        Route::get('dashboard',[DashboardController::class,'index'])->name('admin-dashboard');

        Route::group(['prefix' => 'category'],function(){
            Route::get('/',[CategoryController::class,'index'])->name('admin-category-view');
            Route::match(['get','post'],'create',[CategoryController::class,'create'])->name('admin-category-create');
            Route::match(['get','post'],'update',[CategoryController::class,'update'])->name('admin-category-update');
        });

        Route::group(['prefix' => 'brand'],function(){
            Route::get('/',[BrandController::class,'index'])->name('admin-brand-view');
            Route::match(['get','post'],'create',[BrandController::class,'create'])->name('admin-brand-create');
            Route::match(['get','post'],'update',[BrandController::class,'update'])->name('admin-brand-update');
        });

        Route::group(['prefix' => 'product'],function(){
            Route::get('/',[ProductController::class,'index'])->name('admin-product-view');
            Route::match(['get','post'],'create',[ProductController::class,'create'])->name('admin-product-create');
            Route::match(['get','post'],'update',[ProductController::class,'update'])->name('admin-product-update');

            Route::group(['prefix' => 'image'],function(){
                Route::get('/',[ProductImageController::class,'index'])->name('admin-product-image-view');
                Route::match(['get','post'],'create',[ProductImageController::class,'create'])->name('admin-product-image-create');
                Route::match(['get','post'],'update',[ProductImageController::class,'update'])->name('admin-product-image-update');
    
            });
        });
    });
});