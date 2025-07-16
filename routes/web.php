<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/about', [HomeController::class, 'about'])->name('about');




// Route::prefix('student')->group(function () {
//     Route::get('/login', [StudentLoginController::class, 'showLoginForm'])->name('student.login');
//     Route::post('/login', [StudentLoginController::class, 'login']);
//     Route::middleware('auth:student')->get('/dashboard', function () {
//         return 'Student Dashboard';
//     });
// });

// Route::prefix('teacher')->group(function () {
//     Route::get('/login', [TeacherLoginController::class, 'showLoginForm'])->name('teacher.login');
//     Route::post('/login', [TeacherLoginController::class, 'login']);
//     Route::middleware('auth:teacher')->get('/dashboard', function () {
//         return 'Teacher Dashboard';
//     });
// });


