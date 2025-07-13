<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('front.course.course');
    }
}
