<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;

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
Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhome');
Route::get('/kategoriadmin', function () { return view('kategoriadmin');})->name('kategoriadmin');
Route::get('/laporanadmin', function () { return view('laporanadmin');})->name('laporanadmin');
Route::get('/pembayaranadmin', function () { return view('pembayaranadmin');})->name('pembayaranadmin');


//posting dan users
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::resource('posts', PostController::class);
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');



// komentar
Route::post('/posts/{post}/comments', [CommentController::class, 'storeComment'])->name('comments.store');


