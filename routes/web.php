<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\Student\EnrollmentController;
use App\Http\Controllers\Student\StudentLoginController;
use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Student\PaymentController;

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
Route::get('/course/{id}', [HomeController::class, 'courseDetails'])->name('course.details');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// course enrollment
Route::get('/course/enroll/{id}', [EnrollmentController::class, 'enrollCourse'])->name('course.enroll');


Route::prefix('student')->group(function () {
    Route::get('/login', [StudentLoginController::class, 'showLoginForm'])->name('student.login');
    Route::post('/login', [StudentLoginController::class, 'login'])->name('student.login');
    Route::get('/registration', [StudentLoginController::class, 'showRegistrationForm'])->name('student.registration');
    Route::post('/registration-store', [StudentLoginController::class, 'studentRegister'])->name('student.register');
    Route::middleware('auth:student')->group(function () {
        Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
        Route::get('/logout', [StudentLoginController::class, 'logout'])->name('student.logout');
        
        Route::get('/checkout/{courseId}', [PaymentController::class, 'checkout'])->name('student.checkout');
        Route::post('/success', [PaymentController::class, 'paymentSuccess'])->name('student.payment.success');
        Route::post('/fail', [PaymentController::class, 'paymentFail'])->name('student.payment.fail');
        Route::post('/cancel', [PaymentController::class, 'paymentCancel'])->name('student.payment.cancel');

        Route::get('/enrolled-courses', [EnrollmentController::class, 'enrolledCourses'])->name('student.enrolled_courses');
        Route::get('/course-content/{id}', [EnrollmentController::class, 'courseContent'])->name('student.course_content');
        
    });

});

// Route::prefix('teacher')->group(function () {
//     Route::get('/login', [TeacherLoginController::class, 'showLoginForm'])->name('teacher.login');
//     Route::post('/login', [TeacherLoginController::class, 'login']);
//     Route::middleware('auth:teacher')->get('/dashboard', function () {
//         return 'Teacher Dashboard';
//     });
// });


