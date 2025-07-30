<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        // Logic for displaying the student dashboard
        return view('dashboard.dashboard.dashboard'); // Ensure this view exists
    }
}
