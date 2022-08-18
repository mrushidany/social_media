<?php

use App\Http\Controllers\SocialMediaAuthenticationController;
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

Route::get('/', function () {
    return view('home');
});

// Facebook Authentication URL'S
Route::prefix('facebook')->name('facebook')->group(function (){
    Route::get('auth', [SocialMediaAuthenticationController::class, 'facebookLogin'])->name('login');
    Route::get('callback', [SocialMediaAuthenticationController::class, 'callbackFromFacebook'])->name('callback');
});

// Facebook Authentication URL'S
Route::prefix('twitter')->name('twitter')->group(function (){
    Route::get('auth', [SocialMediaAuthenticationController::class, 'twitterLogin'])->name('login');
    Route::get('callback', [SocialMediaAuthenticationController::class, 'callbackFromTwitter'])->name('callback');
});
