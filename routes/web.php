<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/tables', function () {
    return view('admin.tables');
});

Route::get('/login', function () {
    return view('auth.login');
});
