<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

Route::get('/login', function () {
    return view('login');
})->name('login.form');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Halaman Register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Halaman setelah login
Route::get('/landing', function () {
    return view('landing');
})->middleware('auth')->name('landing');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');