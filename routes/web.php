<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::resource('/', HomepageController::class);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate',[AuthController::class, 'authenticate']);
Route::post('/logout',[AuthController::class, 'logout']);
Route::get('/landing', function () {
    return view('user.landing');
})->name('landing');

Route::middleware(['auth', \App\Http\Middleware\CheckRole::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('/products', ProductController::class)->except(['show']);
    Route::resource('/category', CategoryController::class);

});
