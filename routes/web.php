<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


Route::resource('/', HomepageController::class);

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('/products', ProductController::class);

Route::resource('/category', CategoryController::class);


Route::get('/settings', function () {
    return view('admin.app');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/authenticate',[AuthController::class, 'authenticate']);

Route::post('/logout',[AuthController::class, 'logout']);

Route::get('/dashboard', [UserController::class, 'dashboard_index'])->name('dashboard_index');

Route::get('/cart', [UserController::class, 'cart_index'])->name('cart_index');