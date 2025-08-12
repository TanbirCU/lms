@extends('dashboard.master')

@section('title', 'Enrolled Courses')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Your Enrolled Courses</h4>
                    <p class="">Here You Will See Your Enrolled Courses.</p>

                    <div class="row g-3">
                        @forelse ($enrolledCourses as $course)
                            <div class="col-md-4 col-sm-6 ">
                                <div class="card h-100 shadow-lg border-2 rounded-3">
                                    <img src="{{ asset($course->course->photo) }}" 
                                        alt="{{ $course->course->course_name }}" 
                                        class="card-img-top" 
                                        style="height: 180px; object-fit: cover; border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold text-truncate">{{ $course->course->course_name }}</h6>
                                        <p class="card-text small text-muted" style="height: 40px; overflow: hidden;">
                                            {{ $course->course->small_description }}
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="{{ route('student.course_content', $course->course->id) }}" class="btn btn-sm btn-primary w-100">Go to Content</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="card shadow-sm border-0 text-center p-4">
                                    <h5 class="fw-bold mb-2">No Enrolled Courses</h5>
                                    <p class="text-muted mb-0">You have not enrolled in any courses yet.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>

                 

                </div><!-- Card body end -->
            </div><!-- Card end -->
        </div><!-- Col end -->
    </div><!-- Row end -->
    
@endsection