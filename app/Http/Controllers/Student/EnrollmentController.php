<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course; // Assuming you have a Course model
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function enrollCourse($id)
    {

        $courseEnrollment = Course::findOrFail($id);

        return view('front.course.course_enrollment', compact('courseEnrollment'));
    }
}
