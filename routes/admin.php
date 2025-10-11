<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\AdminAddController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DatabaseBackupController;
use App\Http\Controllers\Admin\ModuleController;

Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');

// Protected routes (require admin login)
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // add teacher
    Route::get('/teacher-add', [AdminTeacherController::class, 'showAddTeacherForm'])->name('teacher_add');
    Route::post('/teacher-add', [AdminTeacherController::class, 'storeTeacher'])->name('teacher_store');
    Route::get('/teacher-list', [AdminTeacherController::class, 'index'])->name('teacher_list');
    Route::get('/teacher-delete/{id}', [AdminTeacherController::class, 'destroy'])->name('teacher_delete');

    // add admin
    Route::resource('/admin-adds',AdminAddController::class)->names('admin_adds');
    // course
    Route::resource('/courses',CourseController::class)->names('courses');
    Route::resource('/lessons',LessonController::class)->names('lessons');
    Route::resource('/modules',ModuleController::class)->names('modules');
    Route::get('/admin/lessons/by-course', [LessonController::class, 'getByCourse'])->name('lessons.byCourse');


    Route::resource('/students',StudentController::class)->names('students');
    // database download
    Route::get('/database-download', [DatabaseBackupController::class, 'downloadDatabase'])->name('database.download');
});
