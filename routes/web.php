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
    return view('landing');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/activity', function () {
    return view('activity');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
