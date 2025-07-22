<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminAddController;
use App\Http\Controllers\Admin\CourseController;

Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');

// Protected routes (require admin login)
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // add teacher
    Route::get('/teacher-add', [AdminTeacherController::class, 'showAddTeacherForm'])->name('teacher_add');
    Route::post('/teacher-add', [AdminTeacherController::class, 'storeTeacher'])->name('teacher_store');
    Route::get('/teacher-list', [AdminTeacherController::class, 'index'])->name('teacher_list');
    Route::get('/teacher-delete/{id}', [AdminTeacherController::class, 'destroy'])->name('teacher_delete');

    // add admin
    Route::resource('/admin-adds',AdminAddController::class)->names('admin_adds');
    // course
    Route::resource('/courses',CourseController::class)->names('courses');

});
