<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route untuk halaman home setelah login
Route::get('/', function() {
    return view('welcome');
});

// Route untuk login, register, reset password, dll.
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
