@extends('front.master')
@section('title', $course->course_name)
@section('content')

    <div class="course-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-details-wrapper">
                        <div class="course-details-thumb">
                            <img src="{{ asset($course->photo) }}" style="width: 200px; height: 200px; object-fit: cover;" alt="Course Image">
                        </div>
                        <div class="course-details-content">
                            <h1>{{ $course->course_name }}</h1>
                            <h2>{{ $course->short_description }}</h2>
                            <p style="font-size: 14px;">{!! $course->description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-sidebar">
                        <div class="course-teacher">
                            <h4>Instructor</h4>
                            <div class="teacher-info">
                                @forelse ($course->teachers as $teacher)
                                    <div class="teacher-item" style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                        <img src="{{ asset($teacher->photo) }}" alt="Teacher Image" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                                        <h5 style="margin: 0; font-size: 14px;">{{ $teacher->name }}</h5>
                                    </div>
                                @empty
                                    <p>No instructor found.</p>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection