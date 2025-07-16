<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.admin.login.show_login_form');
    }

    public function login(Request $request)
    {
       if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            // Attempt to log the admin in
            if (auth()->guard('admin')->attempt($request->only('email', 'password'))) {
                return redirect()->route('admin.dashboard')->with('message', 'Login successful');
                // return view('dashboard.dashboard.dashboard');
            }

            // If login fails, redirect back with an error message
            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        return view('dashboard.admin.login.show_login_form');
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
        // Logout admin user
    }
}
