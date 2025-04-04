<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;


Route::resource('/', HomepageController::class);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/tables', function () {
    return view('admin.tables');
});

Route::get('/settings', function () {
    return view('admin.app');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/authenticate',[AuthController::class, 'authenticate']);

Route::post('/logout',[AuthController::class, 'logout']);