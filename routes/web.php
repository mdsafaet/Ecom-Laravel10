<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\RegistrationLoginController;

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

Route::get('/',[FrontendPageController::class,'Home'])->name('home');
Route::get('/contact',[FrontendPageController::class,'Contact'] )->name('contact');
Route::get('/user-login',[FrontendPageController::class,'Login'] )->name('user.login');
Route::get('/user-registration',[FrontendPageController::class,'Registration'] )->name('user.registration');
Route::get('/forget-pass',[FrontendPageController::class,'ForgetPass'] )->name('forget.pass');

Route::post('/save-user',[RegistrationLoginController::class,'UserAdminRegistration'])->name('save.user');
Route::get('/validate-user',[RegistrationLoginController::class,'LoginValidate'])->name('validate.user');

Route::get('/user-dashboar',function(){
    echo "Make user dashboard";
})->name('user.dashboard');

Route::get('/admin-dashboar',function(){
    echo "Make admin dashboard";
})->name('admin.dashboard');
