<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

// Route untuk halaman home setelah login
Route::get('/', function() {
    return view('welcome');
});

// Route untuk login, register, reset password, dll.
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/// bagian admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/adminhome', function () { return view('adminhome');})->name('adminhome');
Route::get('/kategoriadmin', function () { return view('kategoriadmin');})->name('kategoriadmin');
Route::get('/laporanadmin', function () { return view('laporanadmin');})->name('laporanadmin');
Route::get('/pembayaranadmin', function () { return view('pembayaranadmin');})->name('pembayaranadmin');


