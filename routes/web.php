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

Route::get('/', function () {
    return view('accueil');
})->name('accueil');
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');