@extends('layouts.student.master')
@section('title', $courseEnrollment->course_name)
@section('content')
<div class="container">
    <h1>{{ $courseEnrollment->course_name }}</h1>
    <p>{{ $courseEnrollment->description }}</p>
    <h2>Course Content</h2>
    <ul>
        @foreach($courseContent as $content)
            <li>{{ $content->title }}</li>
        @endforeach
    </ul>
</div>
<div class="course-details-area pt-100 pb-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Course Details</h2>
                <p>Instructor: {{ $courseEnrollment->instructor_name }}</p>
                <p>Duration: {{ $courseEnrollment->duration }} hours</p>
                <p>Start Date: {{ $courseEnrollment->start_date }}</p>
                <p>End Date: {{ $courseEnrollment->end_date }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
