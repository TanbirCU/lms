@extends('front.master')
@section('title', 'Course')
@section('content')

      <!-- slider-start -->
    {{-- <div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{ asset('/assets/front/img/bg/others_bg.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Our Course</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- slider-end -->
    <!-- courses start -->
    <div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
        <div class="container">
            <div class="courses-list">
                <div class="row">
                    @forelse ($courses as $course)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="courses-wrapper course-radius-none mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html">
                                        <img src="{{ asset($course->photo ?? '/assets/front/img/courses/single_courses_thumb_01.jpg') }}" 
                                            alt="Course Image" 
                                            style="width: 369px; height: 223px; object-fit: cover;">
                                    </a>
                                </div>
                                <div class="courses-author">
                                    <img src="{{ asset($course->teachers->first()->photo) }}" 
                                        alt="Teacher Image" 
                                        style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                                </div>
                                <div class="course-main-content clearfix">
                                    <div class="courses-content">
                                        <div class="courses-category-name">
                                            <span><a href="#">Business</a></span>
                                        </div>
                                        <div class="courses-heading">
                                            <h1><a href="course_details.html">{{ $course->course_name }}</a></h1>
                                        </div>
                                        <div class="courses-para">
                                            <p>{{ $course->small_description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-wrapper-bottom clearfix">
                                    <div class="courses-icon d-flex f-left">
                                        <div class="courses-single-icon">
                                            <span class="ti-user"></span>
                                            <span class="user-number">35</span>
                                        </div>
                                        <div class="courses-single-icon">
                                            <span class="ti-heart"></span>
                                            <span class="user-number">35</span>
                                        </div>
                                    </div>
                                    <div class="courses-button f-right">
                                        <a href="{{ route('course.details', $course->id) }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-warning text-center">
                                No courses found.
                            </div>
                        </div>
                    @endforelse

                        
                    {{-- <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_01.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">Business</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Business Studies</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_02.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">Science</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Computer Engineering</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_03.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="course_details.html">English</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="#">English For Tommorow</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_04.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">Business</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Islamic Studies</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_05.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">Science</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Electrical Engineering</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_06.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">design</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details-2.html">Web Development Full</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details-2.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_07.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">Business</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Business Studies</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_08.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">Science</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">Computer Engineering</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="courses-wrapper course-radius-none mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{ asset('/assets/front/img/courses/single_courses_thumb_09.jpg') }}" alt=""></a>
                            </div>
                            <div class="courses-author">
                                <img src="{{ asset('/assets/front/img/courses/coursesauthor1.png') }}" alt="">
                            </div>
                            <div class="course-main-content clearfix">
                                <div class="courses-content">
                                    <div class="courses-category-name">
                                        <span>
                                            <a href="#">English</a>
                                        </span>
                                    </div>
                                    <div class="courses-heading">
                                        <h1><a href="course_details.html">English For Tommorow</a></h1>
                                    </div>
                                    <div class="courses-para">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom clearfix">
                                <div class="courses-icon d-flex f-left">
                                    <div class="courses-single-icon">
                                        <span class="ti-user"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                    <div class="courses-single-icon">
                                        <span class="ti-heart"></span>
                                        <span class="user-number">35</span>
                                    </div>
                                </div>
                                <div class="courses-button f-right">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-courses-btn text-center mt-15 mb-30">
                            <button class="btn black-border">View all course</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
   
@endsection