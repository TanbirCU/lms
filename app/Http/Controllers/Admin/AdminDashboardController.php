<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('admin dashboard');
        // Logic to retrieve data for the admin dashboard can be added here
        return view('admin.dashboard');
    }   
}
