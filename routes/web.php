<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\HomepageController;
use App\Http\Controllers\user\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// front and user side
Route::middleware(['setlocale'])->group(function () {
    Route::get('/', [HomepageController::class, 'user_home_page'])->name('home')->middleware('adminRedirect');
    Route::get('change-language/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    })->name('change.language');
    Route::get('/shoping',[HomepageController::class,'show_shop'])->name('shop.show');
    Route::get('/shoping-filter',[HomepageController::class,'filter_product'])->name('shop.filter');

});

Route::middleware('auth')->group(function () {
    Route::get('cart', [CartController::class, 'show_cart'])->name('cart.show');
    Route::post('cart-add', [CartController::class, 'add_cart'])->name('cart.add');
});
// user side end

// login process
Route::post('loginProceess', [AuthController::class, 'login_process'])->name('loginProceess');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerProcess', [AuthController::class, 'register_process'])->name('register_process');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Social Login
Route::get('auth/{provider}', [SocialController::class, 'redirect'])->name('redirecttoSocial');
Route::get('auth/{provider}/back', [SocialController::class, 'socilLogin']);

// AdminController
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin-index');
    })->name('admin_dashboard');
    Route::prefix('admin_dashboard')->group(function () {
        // category
        Route::get('/category', [CategoryController::class, 'index'])->name('category-page');
        Route::get('/add-category', [CategoryController::class, 'add_category'])->name('add_category');
        Route::post('/category_process', [CategoryController::class, 'add_category_process'])->name('category_process');
        Route::get('/category-delete-process/{id}', [CategoryController::class, 'delete_process'])->name('catrgoty.delete_process');
        Route::get('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::post('/category-update-process/{id}', [CategoryController::class, 'update_process'])->name('category.update_process');

        // product
        Route::get('/products', [ProductController::class, 'index'])->name('product-page');
        Route::get('/add-products', [ProductController::class, 'add_product'])->name('add_product');
        Route::post('/add-products-processs', [ProductController::class, 'add_product_process'])->name('add_product_process');
        Route::get('/product-delete-process/{id}', [ProductController::class, 'remove_product'])->name('product.delete_process');
        Route::get('/product-update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::post('/product-update-process/{id}', [ProductController::class, 'update_process'])->name('product.update_process');

        // user
        Route::get('/user', [UserController::class, 'user_show'])->name('admin.users');
        Route::post('/user-add', [UserController::class, 'user_save'])->name('admin.users.add');

        // Setting
        Route::get('change-password', [UserController::class, 'admin_setting'])->name('admin_setting');
        Route::post('change-password', [UserController::class, 'change_password_save'])->name('change_password_save');
        Route::post('change_profile', [UserController::class, 'update_profile_save'])->name('update_profile');
    });
});

// google pay
Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');
