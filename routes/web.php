<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::resource('/', HomepageController::class);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/tables', function () {
    return view('admin.tables');
});

Route::resource('/products', ProductController::class);

Route::resource('/category', CategoryController::class);


Route::get('/settings', function () {
    return view('admin.app');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/authenticate',[AuthController::class, 'authenticate']);

Route::post('/logout',[AuthController::class, 'logout']);