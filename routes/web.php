<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('LandingPage.landing');
});

// Google Auth Routes
/**
 * Google Login
 */
Route::controller(SocialiteController::class)->group(function () {

    Route::get('/auth/google', 'googleLogin')->name('auth.google');
    Route::get('auth/google-callback', 'googleAuthentication')->name('auth.google-callback');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('HomePage/home');
});
Route::get('/gallery', function () {
    return view('gallery.gallery');
});

Route::get('/community', function () {
    return view('community.community');
})->name('community');

Route::get('/activity', function () {
    return view('activity.activity');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/create-community', function () {
    return view('community.create-community');
})->name('create-community');

Route::get('/profile-community', function () {
    return view('community.profile-community');
})->name('profile-community');
