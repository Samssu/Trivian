<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
//LandingPage
Route::get('/', function () {
    return view('LandingPage.landing');
});

// Auth
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::get('/search', function () {
    return view('search.search');
})->name('search');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Google Auth Routes
/**
 * Google Login
 */
Route::controller(SocialiteController::class)->group(function () {

    Route::get('/auth/google', 'googleLogin')->name('auth.google');
    Route::get('auth/google-callback', 'googleAuthentication')->name('auth.google-callback');
    Route::get('/redirect', [SocialiteController::class, 'redirect'])->name('auth.redirection');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/search-result', function () {
    return view('search.search-result');
})->name('search-result');

Route::get('/notifications', function () {
    return view('notifications.notifications');
})->name('notifications');

//profile
Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Route::get('/edit-profile', function () {
    return view('profile.edit-profile');
})->name('edit-profile');

//
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile')->middleware('auth');
//

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


Route::get('/profile-community', function () {
    return view('community.profile-community');
})->name('profile-community');


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

Route::get('/profile-gallery-aws', function () {
    return view('gallery.profile-gallery-aws');
})->name('profile-gallery-aws');

Route::get('/profile-gallery-onlineshop', function () {
    return view('gallery.profile-gallery-onlineshop');
})->name('profile-gallery-onlineshop');

Route::get('/profile-reactforum', function () {
    return view('gallery.profile-gallery-reactforum');
})->name('profile-gallery-reactforum');

// Activity
Route::get('/activity', function () {
    return view('activity.activity');
})->name('activity');

Route::get('/mytask-activity', function () {
    return view('activity.mytask-activity');
})->name('mytask-activity');

Route::get('/leaderboard-activity', function () {
    return view('activity.leaderboard-activity');
})->name('leaderboard-activity');


Route::get('/adminLTE', function () {
    return view('public.adminLTE');
});
// admin Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/community-admin', function () {
    return view('admin.layout-admin.community-admin');
});
Route::get('/edit-com-admin', function () {
    return view('admin.layout-admin.edit-com-admin');
});
Route::get('/edit-gal-admin', function () {
    return view('admin.layout-admin.edit-gal-admin');
});
Route::get('/edit-act-admin', function () {
    return view('admin.layout-admin.edit-act-admin');
});
Route::get('/gallery-admin', function () {
    return view('admin.layout-admin.gallery-admin');
});
Route::get('/activity-admin', function () {
    return view('admin.layout-admin.activity-admin');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
});
