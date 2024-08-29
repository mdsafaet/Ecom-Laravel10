<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.page.index');
})->name('home');


Route::get('/contact', function () {
    return view('frontend.page.contact');
})->name('contact');


Route::get('/user-login', function () {
    return view('frontend.page.login');
})->name('user.login');

Route::get('/user-registration', function () {
    return view('frontend.page.registration');
})->name('user.registration');

Route::get('/forget-pass', function () {
    return view('frontend.page.forget-pass');
})->name('forget.pass');