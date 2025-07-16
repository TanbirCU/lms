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
        dd(22);
        // Validate and authenticate admin user
    }

    public function logout(Request $request)
    {
        dd(33);
        // Logout admin user
    }
}
