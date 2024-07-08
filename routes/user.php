<?php

use App\Http\Controllers\User\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user'],function(){

    Route::match(['get', 'post'], '/', [LoginController::class, 'login'])->name('user-login');

    Route::get('auth/google',[LoginController::class,'GoogleLogin'])->name('user-google-login');
    Route::any('auth/google/callback',[LoginController::class,'GoogleCallback'])->name('google-callback');

    

    Route::get('auth/github',[LoginController::class,'GithubLogin'])->name('user-github-login');
    Route::any('auth/github/callback',[LoginController::class,'GithubCallback'])->name('github-callback');
});