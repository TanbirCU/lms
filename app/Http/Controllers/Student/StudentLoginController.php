<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model

class StudentLoginController extends Controller
{
    public function showRegistrationForm()
    {
        return view('front.student.show_registration_form');
    }
    public function studentRegister(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:students,email',
                'password' => 'required|min:6|confirmed',
            ]);

            // Create the student user
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->mobile;
            $student->password = bcrypt($request->password);
            $student->save();

            return redirect()->route('student.login')->with('message', 'Registration successful, please login');
        }

        return view('front.student.show_registration_form')->with('error', 'Invalid request method');
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
