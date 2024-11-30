<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;
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

// Auth
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::get('/search', function () {
    return view('search.search');
})->name('search');

Route::get('/search-result', function () {
    return view('search.search-result');
})->name('search-result');

Route::get('/notifications', function () {
    return view('notifications.notifications');
})->name('notifications');

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Route::get('/edit-profile', function () {
    return view('profile.edit-profile');
})->name('edit-profile');

//LandingPage
Route::get('/', function () {
    return view('LandingPage.landing');
});

// Home
Route::get('/home', function () {
    return view('HomePage.home');
})->name('home');


Route::get('/view-post', function () {
    return view('HomePage.view-post');
})->name('view-post');

// Community
Route::get('/create-community', function () {
    return view('community.create-community');
})->name('create-community');

Route::get('/profile-uxid', function () {
    return view('community.profile-uxid');
})->name('profile-uxid');

Route::get('/profile-google', function () {
    return view('community.profile-google');
})->name('profile-google');

Route::get('/profile-laravel', function () {
    return view('community.profile-laravel');
})->name('profile-laravel');

Route::get('/profile-reactjs', function () {
    return view('community.profile-reactjs');
})->name('profile-reactjs');

Route::get('/profile-oyen', function () {
    return view('community.profile-oyen');
})->name('profile-oyen');

Route::get('/profile-warungasep', function () {
    return view('community.profile-warungasep');
})->name('profile-warungasep');

Route::get('/profile-solid', function () {
    return view('community.profile-solid');
})->name('profile-solid');


Route::get('/community', function () {
    return view('community.community');
})->name('community');

Route::get('/member-community', function () {
    return view('community.member-community');
})->name('member-community');

// Gallery
Route::get('/gallery', function () {
    return view('gallery.gallery');
});

Route::get('/create-gallery', function () {
    return view('gallery.create-gallery');
})->name('create-gallery');

Route::get('/artworks', [ArtworkController::class, 'index']);
Route::post('/artworks', [ArtworkController::class, 'store']);
Route::get('/artworks/{id}/share', [ArtworkController::class, 'share']);


Route::get('/profile-gallery', function () {
    return view('gallery.profile-gallery');
})->name('profile-gallery');

// Activity
Route::get('/activity', function () {
    return view('activity.activity');
});

// admin Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
