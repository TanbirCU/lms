@extends('dashboard.master')

@section('title', auth()->guard('student')->check() ? 'Student Dashboard' : 'Admin Dashboard')

@section('content')
    <h1>
        Welcome to the 
        @if (auth()->guard('student')->check())
            Student Dashboard
        @else
            Admin Dashboard
        @endif
    </h1>

    <p>
        This is the 
        @if (auth()->guard('student')->check())
            student
        @else
            admin
        @endif 
        dashboard where you can manage various aspects of the application.
    </p>
@endsection
