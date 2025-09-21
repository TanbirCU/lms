@extends('dashboard.master')

@section('title', 'Course Details')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset($course->photo) }}" width="200px" height="200px" alt="Course Image" class="img-fluid mb-3">
                    <h4 class="card-title">{{ $course->course_name }}</h4>
                    <p class="card-text">{{ $course->short_description }}</p>
                    <p class="card-text">{!! $course->description !!}</p>

                    <h5>Teachers:</h5>
                    <ul>
                        @foreach($course->teachers as $teacher)
                            <li>{{ $teacher->name }}</li>
                        @endforeach
                    </ul>

                    <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Back to Course List</a>
                </div><!-- Card body end -->
            </div><!-- Card end -->
        </div><!-- Col end -->
    </div><!-- Row end -->
@endsection
