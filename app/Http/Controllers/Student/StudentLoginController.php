<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentLoginController extends Controller
{
    public function showRegistrationForm()
    {
        return view('front.student.show_registration_form');
    }

    public function showLoginForm()
    {
        return view('front.student.show_login_form');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            // Attempt to log the student in
            if (auth()->guard('student')->attempt($request->only('email', 'password'))) {
                return redirect()->route('student.dashboard')->with('message', 'Student Login successful');
            }

            // If login fails, redirect back with an error message
            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        return view('dashboard.student.login.show_login_form');
    }

    public function logout(Request $request)
    {
        auth()->guard('student')->logout();
        return redirect()->route('student.login');
        // Logout student user
    }
}
