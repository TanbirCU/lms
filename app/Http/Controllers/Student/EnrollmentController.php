<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course; // Assuming you have a Course model
use App\Models\EnrolledCourse;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function enrollCourse($id)
    {
        $courseEnrollment = Course::findOrFail($id);
        return view('front.course.course_enrollment', compact('courseEnrollment'));
    }

    public function enrolledCourses()
    {
        $data['student']=$student = Auth::guard('student')->user();
        $data['enrolledCourses'] = EnrolledCourse::with('course')->where('student_id', $student->id)->get();
   
        return view('dashboard.student.course.course_enrolled', $data);
    }

    public function courseContent($id)
    {
        $data['course'] = $course = Course::findOrFail($id);
        $data['lessons'] = $lesson = $course->lessons;

        return view('dashboard.student.course.course_content', $data);
    }
}
