<?php

use App\Http\Controllers\DatabaseManagementController;
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
    return view('landing_page');
})->name('landing_page');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/db', function () {
    return view('db_management');
})->name('db_management');

Route::get('/microsite', function(){
    return view('microsite.index');
})->name('microsite');

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');

// Facebook Authentication URL'S
Route::prefix('facebook')->name('facebook')->group(function (){
    Route::get('auth', [SocialMediaAuthenticationController::class, 'facebookLogin'])->name('login');
    Route::get('callback', [SocialMediaAuthenticationController::class, 'callbackFromFacebook'])->name('callback');
});

//Instagram Authentication URL'S
Route::prefix('instagram')->name('instagram')->group(function (){
    Route::get('auth', [SocialMediaAuthenticationController::class, 'instagramLogin'])->name('login');
    Route::get('callback', [SocialMediaAuthenticationController::class, 'callbackFromInstagram'])->name('callback');
    Route::get('hashtag', [SocialMediaAuthenticationController::class, 'hashtagSearch'])->name('hashtag');
});

//Database Management Settings
Route::post('/db/migrate', [DatabaseManagementController::class, 'migrate'])->name('migrate');
Route::post('/db/rollback', [DatabaseManagementController::class, 'rollback'])->name('rollback');
Route::post('/db/clear_cache', [DatabaseManagementController::class, 'clear_cache'])->name('clear_cache');

