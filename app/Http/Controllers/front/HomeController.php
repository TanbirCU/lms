<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    
    public function home()
    {
        return view('front.home.home');
    }
    public function contact()
    {
        return view('front.contact.contact');
    }
    public function course()
    {
        $data['courses'] = Course::with('teachers')->get();
        return view('front.course.course', $data);
    }
    public function courseDetails($id)
    {
        $data['course'] = Course::with('teachers')->findOrFail($id);
        return view('front.course.course_details', $data);
    }
    public function events()
    {
        return view('front.events.events');
    }

    public function about()
    {
        return view('front.about.about');
    }
}
