<?php

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

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::get('/', function () {
    return view('LandingPage.landing');
});
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


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

