<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;


Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');

// Protected routes (require admin login)
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});
