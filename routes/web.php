<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\user\HomepageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::middleware(['setlocale'])->group(function () {
    Route::get('/', [HomepageController::class, 'user_home_page'])->name('home')->middleware('adminRedirect');

    Route::get('change-language/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    })->name('change.language');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('loginProceess', [AuthController::class, 'login_process'])->name('loginProceess');
Route::post('registerProcess', [AuthController::class, 'register_process'])->name('register_process');


Route::get('auth/google', [SocialController::class, 'redirect_google'])->name('google.login');
Route::get('auth/google/back', [SocialController::class, 'loginGoogle']);

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// AdminController
Route::middleware(['auth'])->group(function () {
    Route::get('admin', function () {
        return view('admin.admin-index');
    })->name('admin_dashboard');
    Route::prefix('admin_dashboard')->group(function () {
        Route::get('/category', [CategoryController::class, 'index'])->name('category-page');
        Route::get('/add-category', [CategoryController::class, 'add_category'])->name('add_category');
        Route::post('/category_process', [CategoryController::class, 'add_category_process'])->name('category_process');
        Route::get('/delete-process/{id}', [CategoryController::class, 'delete_process'])->name('delete_process');
        Route::get('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::post('/update-process/{id}', [CategoryController::class, 'update_process'])->name('update_process');
    });
});

// Route::get('change-language/{locale}', function ($locale) {
//     Session::put('locale', $locale);
//     return redirect()->back();
// })->name('change.language');
