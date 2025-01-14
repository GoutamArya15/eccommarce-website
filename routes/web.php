<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('admin',function(){
    return view('admin.admin-index');
});


Route::get('login',function(){
    return view('auth.login');
})->name('login');

Route::post('loginProceess',[AuthController::class,'login_process'])->name('loginProceess');
Route::post('registerProcess',[AuthController::class,'register_process'])->name( 'register_process');

Route::get('register',function(){
    return view('auth.register');
})->name('register');