@extends('front.master')
@section('title', 'Home')
@section('content')
     <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url({{asset('/assets/front/img/slider/slider_bg_001.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">No Nation Can Prosper<br>In Life Without Education</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.</p>
                                <button class="btn yellow-bg-btn" data-animation="fadeInUp" data-delay=".6s">admit now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url({{asset('/assets/front/img/slider/slider_bg_002.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">No Nation Can Prosper<br>In Life Without Education</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.</p>
                                <button class="btn yellow-bg-btn" data-animation="fadeInUp" data-delay=".6s">admit now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url({{asset('/assets/front/img/slider/slider_bg_001.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">No Nation Can Prosper<br>In Life Without Education</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.</p>
                                <button class="btn yellow-bg-btn" data-animation="fadeInUp" data-delay=".6s">admit now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Our Latest Courses</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{asset('/assets/front/img/courses/coursesthumb001.jpg')}}" alt=""></a>
                            </div>
                            <div class="courses-author-2 text-center">
                                <img src="{{asset('/assets/front/img/courses/coursesauthor1.png')}}" alt="">
                            </div>
                            <div class="courses-content courses-content-2 text-center">
                                <div class="courses-heading text-center">
                                    <h1><a href="course_details.html">Complete Full English From Beginner</a></h1>
                                </div>
                                <div class="courses-icon text-center">
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-money"></span>
                                        <span class="price">Price</span>
                                        <span class="user-number">235</span>
                                    </div>
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-user"></span>
                                        <span class="seat">Seat</span>
                                        <span class="user-number">50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="testimonilas-rating testimonilas-rating-2">
                                    <ul>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                </div>
                                <div class="courses-button courses-button-2 text-uppercase">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{asset('/assets/front/img/courses/coursesthumb002.jpg')}}" alt=""></a>
                            </div>
                            <div class="courses-author-2 text-center">
                                <img src="{{asset('/assets/front/img/courses/coursesauthor2.png')}}" alt="">
                            </div>
                            <div class="courses-content courses-content-2 text-center">
                                <div class="courses-heading text-center">
                                    <h1><a href="course_details.html">Learn Computer Science &amp; Engineering</a></h1>
                                </div>
                                <div class="courses-icon text-center">
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-money"></span>
                                        <span class="price">Price</span>
                                        <span class="user-number">235</span>
                                    </div>
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-user"></span>
                                        <span class="seat">Seat</span>
                                        <span class="user-number">50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="testimonilas-rating testimonilas-rating-2">
                                    <ul>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                </div>
                                <div class="courses-button courses-button-2 text-uppercase">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{asset('/assets/front/img/courses/coursesthumb003.jpg')}}" alt=""></a>
                            </div>
                            <div class="courses-author-2 text-center">
                                <img src="{{asset('/assets/front/img/courses/coursesauthor3.png')}}" alt="">
                            </div>
                            <div class="courses-content courses-content-2 text-center">
                                <div class="courses-heading text-center">
                                    <h1><a href="course_details.html">Complete Full Web Development</a></h1>
                                </div>
                                <div class="courses-icon text-center">
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-money"></span>
                                        <span class="price">Price</span>
                                        <span class="user-number">235</span>
                                    </div>
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-user"></span>
                                        <span class="seat">Seat</span>
                                        <span class="user-number">50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="testimonilas-rating testimonilas-rating-2">
                                    <ul>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                </div>
                                <div class="courses-button courses-button-2 text-uppercase">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper mb-30">
                            <div class="courses-thumb">
                                <a href="course_details.html"><img src="{{asset('/assets/front/img/courses/coursesthumb004.jpg')}}" alt=""></a>
                            </div>
                            <div class="courses-author-2 text-center">
                                <img src="{{asset('/assets/front/img/courses/coursesauthor1.png')}}" alt="">
                            </div>
                            <div class="courses-content courses-content-2 text-center">
                                <div class="courses-heading text-center">
                                    <h1><a href="course_details.html">Studing In Medical Science In Full Course</a></h1>
                                </div>
                                <div class="courses-icon text-center">
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-money"></span>
                                        <span class="price">Price</span>
                                        <span class="user-number">235</span>
                                    </div>
                                    <div class="courses-single-icon courses-single-icon-2">
                                        <span class="ti-user"></span>
                                        <span class="seat">Seat</span>
                                        <span class="user-number">50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="testimonilas-rating testimonilas-rating-2">
                                    <ul>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                </div>
                                <div class="courses-button courses-button-2 text-uppercase">
                                    <a href="course_details.html">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
    <!-- events start -->
    <div id="events" class="events-area events-bg-height pt-100 pb-70" style="background-image: url({{asset('/assets/front/img/courses/courses_bg.png')}})">
        <div class="container">
            <div class="events-list">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="events-registration-form mb-30">
                            <div class="events-registration-form-wrapper">
                                <div class="events-registration-form-heading d-flex justify-content-between">
                                    <div class="events-registration-form-heading-title">
                                        <h1>Registation Now</h1>
                                        <span>Fillup the form</span>
                                    </div>
                                    <div class="events-registration-form-heading-icon">
                                        <img src="{{asset('/assets/front/img/events/events-registration-form-icon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="events-registration-main-form">
                                    <form action="#">
                                        <input type="text" placeholder="Your Name:">
                                        <input type="email" placeholder="Your Email:">
                                        <input type="text" placeholder="Your Phone:">
                                        <input type="text" placeholder="Your Subject:">
                                    </form>
                                    <button class="btn yellow-bg-btn blue-bg-btn-hover">admit now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-title section-title-para-2 mb-40">
                                    <div class="section-title-heading mb-10">
                                        <h1 class="white-color">Latest Events</h1>
                                    </div>
                                    <div class="section-title-para">
                                        <p class="white-color">Belis nisl adipiscing sapien sed malesu diame</p>
                                    </div>
                                </div>
                                <div class="events-button-ara">
                                    <button class="btn white-border-btn">view all</button>
                                </div>
                            </div>
                        </div>
                        <div class="single-events mb-30">
                            <div class="events-wrapper">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <img src="{{asset('/assets/front/img/events/events_001.png')}}" alt="">
                                    </div>
                                    <div class="events-text events-text-2 white-bg">
                                        <div class="event-text-heading d-flex mb-20">
                                            <div class="events-text-title">
                                                <a href="#">
                                                    <h4>Annual Meeting -2018</h4>
                                                </a>
                                                <div class="time-area time-area-2">
                                                    <span class="ti-timer"></span>
                                                    <span class="published-time">8:00 AM - 5:00 PM</span>
                                                </div>
                                                <div class="time-area time-area-2">
                                                    <span class="ti-map-alt"></span>
                                                    <span class="published-time published-location">High street, USA</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>I will give you a complete account of the system and expound the actual teachings</p>
                                        </div>
                                        <div class="events-view-btn mt-10">
                                            <a href="event_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-events mb-30">
                            <div class="events-wrapper">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <img src="{{asset('/assets/front/img/events/events_002.png')}}" alt="">
                                    </div>
                                    <div class="events-text events-text-2 white-bg">
                                        <div class="event-text-heading d-flex mb-20">
                                            <div class="events-text-title">
                                                <a href="#">
                                                    <h4>Science Fair -2018</h4>
                                                </a>
                                                <div class="time-area time-area-2">
                                                    <span class="ti-timer"></span>
                                                    <span class="published-time">8:00 AM - 5:00 PM</span>
                                                </div>
                                                <div class="time-area time-area-2">
                                                    <span class="ti-map-alt"></span>
                                                    <span class="published-time published-location">High street, USA</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>I will give you a complete account of the system and expound the actual teachings</p>
                                        </div>
                                        <div class="events-view-btn mt-10">
                                            <a href="event_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events end -->
    <!-- team start -->
    <div class="team-area pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Our Experience Advisors</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper team-wrapper-2 mb-30">
                            <div class="team-thumb">
                                <img src="{{asset('/assets/front/img/team/teamthumb001.jpg')}}" alt="">
                            </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-icon-list">
                                    <ul>
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                        <li><a href="#"><span class="ti-google"></span></a></li>
                                        <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-teacher-info team-teacher-info-2 text-center">
                                <h1>Chase M. Bynum</h1>
                                <h2>English Teacher</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper team-wrapper-2 mb-30">
                            <div class="team-thumb">
                                <img src="{{asset('/assets/front/img/team/teamthumb002.jpg')}}" alt="">
                            </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-icon-list">
                                    <ul>
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                        <li><a href="#"><span class="ti-google"></span></a></li>
                                        <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-teacher-info team-teacher-info-2 text-center">
                                <h1>Brenda C. Garcia</h1>
                                <h2>CSE Teacher</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper team-wrapper-2 mb-30">
                            <div class="team-thumb">
                                <img src="{{asset('/assets/front/img/team/teamthumb003.jpg')}}" alt="">
                            </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-icon-list">
                                    <ul>
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                        <li><a href="#"><span class="ti-google"></span></a></li>
                                        <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-teacher-info team-teacher-info-2 text-center">
                                <h1>Marc K. Bruhn</h1>
                                <h2>Math Teacher</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper team-wrapper-2 mb-30">
                            <div class="team-thumb">
                                <img src="{{asset('/assets/front/img/team/teamthumb004.jpg')}}" alt="">
                            </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-icon-list">
                                    <ul>
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                        <li><a href="#"><span class="ti-google"></span></a></li>
                                        <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-teacher-info team-teacher-info-2 text-center">
                                <h1>Mary M. Douglas</h1>
                                <h2>English Teacher</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- counter start -->
    <div class="counter-area gray-bg">
        <div class="container pt-90 pb-65">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="{{asset('/assets/front/img/counter/counter_icon1.png')}}" alt="">
                        <span class="counter">10532</span>
                        <h3>Satisfied Students</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="{{asset('/assets/front/img/counter/counter_icon2.png')}}" alt="">
                        <span class="counter">7985</span>
                        <h3>Courses Complated</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="{{asset('/assets/front/img/counter/counter_icon3.png')}}" alt="">
                        <span class="counter">5382</span>
                        <h3>Satisfied Students</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="{{asset('/assets/front/img/counter/counter_icon4.png')}}" alt="">
                        <span class="counter">354</span>
                        <h3>Expert Advisors</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->
    <!-- testimonials start -->
    <div class="testimonilas-area pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">What Our Students Say</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonilas-list">
                <div class="row testimonilas-active-2">
                    <div class="col-xl-12">
                        <div class="testimonilas-wrapper testimonilas-wrapper-2 mb-110">
                            <div class="testimonilas-para">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praes volup tatum deleniti atque corrupti quos dolorest quas molestias excepturi occaecati cupiditate non provident </p>
                            </div>
                            <div class="testimonilas-heading d-flex">
                                <div class="testimonilas-author-thumb">
                                    <img src="{{asset('/assets/front/img/testimonials/testimonilas_author_thumb1.png')}}" alt="">
                                </div>
                                <div class="testimonilas-author-title">
                                    <h1>Lisa McClanahan</h1>
                                    <h2>CSE Student</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="testimonilas-wrapper testimonilas-wrapper-2 mb-110">
                            <div class="testimonilas-para">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praes volup tatum deleniti atque corrupti quos dolorest quas molestias excepturi occaecati cupiditate non provident </p>
                            </div>
                            <div class="testimonilas-heading d-flex">
                                <div class="testimonilas-author-thumb">
                                    <img src="{{asset('/assets/front/img/testimonials/testimonilas_author_thumb1.png')}}" alt="">
                                </div>
                                <div class="testimonilas-author-title">
                                    <h1>Lisa McClanahan</h1>
                                    <h2>CSE Student</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="testimonilas-wrapper testimonilas-wrapper-2 mb-110">
                            <div class="testimonilas-para">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praes volup tatum deleniti atque corrupti quos dolorest quas molestias excepturi occaecati cupiditate non provident </p>
                            </div>
                            <div class="testimonilas-heading d-flex">
                                <div class="testimonilas-author-thumb">
                                    <img src="{{asset('/assets/front/img/testimonials/testimonilas_author_thumb1.png')}}" alt="">
                                </div>
                                <div class="testimonilas-author-title">
                                    <h1>Lisa McClanahan</h1>
                                    <h2>CSE Student</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="testimonilas-wrapper testimonilas-wrapper-2 mb-110">
                            <div class="testimonilas-para">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praes volup tatum deleniti atque corrupti quos dolorest quas molestias excepturi occaecati cupiditate non provident </p>
                            </div>
                            <div class="testimonilas-heading d-flex">
                                <div class="testimonilas-author-thumb">
                                    <img src="{{asset('/assets/front/img/testimonials/testimonilas_author_thumb1.png')}}" alt="">
                                </div>
                                <div class="testimonilas-author-title">
                                    <h1>Lisa McClanahan</h1>
                                    <h2>CSE Student</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials end -->
    <!-- shop stat -->
    <div id="shop" class="shop-area pt-100 pb-70" style="background-image: url({{asset('/assets/front/img/shop/shop_bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="white-color">Our Shop</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="white-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-list">
                <div class="row shop-active">
                    <div class="col-xl-12">
                        <div class="shop-inner mb-30 white-bg">
                            <div class="shop-thumb">
                                <a href="shop_pages.html"><img src="{{asset('/assets/front/img/shop/shopthumb001.jpg')}}" alt=""></a>
                            </div>
                            <div class="book-inner-content">
                                <div class="sohop-heading mb-20">
                                    <h1 class="shop-book-name"><a href="shop_pages.html">Graphics Design Book</a></h1>
                                    <h2 class="book-writter">Writter : <span class="f-700">Robert Cool</span></h2>
                                </div>
                                <div class="shop-inner-details d-flex">
                                    <div class="book-price">
                                        <span class="price">Price</span>
                                        <span class="user-number">49.99</span>
                                    </div>
                                    <div class="book-ratings text-right">
                                        <ul>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="shop-inner mb-30 white-bg">
                            <div class="shop-thumb">
                                <a href="shop_pages.html"><img src="{{asset('/assets/front/img/shop/shopthumb002.jpg')}}" alt=""></a>
                            </div>
                            <div class="book-inner-content">
                                <div class="sohop-heading mb-20">
                                    <h1 class="shop-book-name"><a href="shop_pages.html">Graphics Design Book</a></h1>
                                    <h2 class="book-writter">Writter : <span class="f-700">Robert Cool</span></h2>
                                </div>
                                <div class="shop-inner-details d-flex">
                                    <div class="book-price">
                                        <span class="price">Price</span>
                                        <span class="user-number">49.99</span>
                                    </div>
                                    <div class="book-ratings text-right">
                                        <ul>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="shop-inner mb-30 white-bg">
                            <div class="shop-thumb">
                                <a href="shop_pages.html"><img src="{{asset('/assets/front/img/shop/shopthumb003.jpg')}}" alt=""></a>
                            </div>
                            <div class="book-inner-content">
                                <div class="sohop-heading mb-20">
                                    <h1 class="shop-book-name"><a href="shop_pages.html">Web Development Book</a></h1>
                                    <h2 class="book-writter">Writter : <span class="f-700">Robert Cool</span></h2>
                                </div>
                                <div class="shop-inner-details d-flex">
                                    <div class="book-price">
                                        <span class="price">Price</span>
                                        <span class="user-number">49.99</span>
                                    </div>
                                    <div class="book-ratings text-right">
                                        <ul>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="shop-inner mb-30 white-bg">
                            <div class="shop-thumb">
                                <a href="shop_pages.html"><img src="{{asset('/assets/front/img/shop/shopthumb004.jpg')}}" alt=""></a>
                            </div>
                            <div class="book-inner-content">
                                <div class="sohop-heading mb-20">
                                    <h1 class="shop-book-name"><a href="shop_pages.html">Graphics Design Book</a></h1>
                                    <h2 class="book-writter">Writter : <span class="f-700">Robert Cool</span></h2>
                                </div>
                                <div class="shop-inner-details d-flex">
                                    <div class="book-price">
                                        <span class="price">Price</span>
                                        <span class="user-number">49.99</span>
                                    </div>
                                    <div class="book-ratings text-right">
                                        <ul>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="shop-inner mb-30 white-bg">
                            <div class="shop-thumb">
                                <a href="shop_pages.html"><img src="{{asset('/assets/front/img/shop/shopthumb002.jpg')}}" alt=""></a>
                            </div>
                            <div class="book-inner-content">
                                <div class="sohop-heading mb-20">
                                    <h1 class="shop-book-name"><a href="shop_pages.html">Web Development Book</a></h1>
                                    <h2 class="book-writter">Writter : <span class="f-700">Robert Cool</span></h2>
                                </div>
                                <div class="shop-inner-details d-flex">
                                    <div class="book-price">
                                        <span class="price">Price</span>
                                        <span class="user-number">49.99</span>
                                    </div>
                                    <div class="book-ratings text-right">
                                        <ul>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop end -->
    <!-- latest_news start -->
    <div id="blog" class="latest_news-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Latest News</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-thumb mb-25">
                            <a href="news_details.html"><img src="{{asset('/assets/front/img/blog/blog_thumb_1.jpg')}}" alt=""></a>
                            <span class="blog-category">news</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>Auguest 25, 2018</span>
                            </div>
                            <h5><a href="news_details.html">Some say education is the process of gaining information is nation.</a></h5>
                            <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                            <div class="blog-bottom-2 d-flex justify-content-between">
                                <div class="admin-blog-info">
                                    <ul>
                                        <li>By<span class="f-600"> Admin</span></li>
                                        <li class="blog-date-margin">Auguest 25, 2018</li>
                                    </ul>
                                </div>
                                <div class="read-more-btn text-right">
                                    <button>Read more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-thumb mb-25">
                            <a href="news_details.html"><img src="{{asset('/assets/front/img/blog/blog_thumb_2.jpg')}}" alt=""></a>
                            <span class="blog-category">news</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>Auguest 25, 2018</span>
                            </div>
                            <h5><a href="news_details.html">Some say education is the process of gaining information is nation.</a></h5>
                            <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                            <div class="blog-bottom-2 d-flex justify-content-between">
                                <div class="admin-blog-info">
                                    <ul>
                                        <li>By<span class="f-600"> Admin</span></li>
                                        <li class="blog-date-margin">Auguest 25, 2018</li>
                                    </ul>
                                </div>
                                <div class="read-more-btn text-right">
                                    <button>Read more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-thumb mb-25">
                            <a href="news_details.html"><img src="{{asset('/assets/front/img/blog/blog_thumb_3.jpg')}}" alt=""></a>
                            <span class="blog-category">news</span>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>Auguest 25, 2018</span>
                            </div>
                            <h5><a href="news_details.html">Some say education is the process of gaining information is nation.</a></h5>
                            <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                            <div class="blog-bottom-2 d-flex justify-content-between">
                                <div class="admin-blog-info">
                                    <ul>
                                        <li>By<span class="f-600"> Admin</span></li>
                                        <li class="blog-date-margin">Auguest 25, 2018</li>
                                    </ul>
                                </div>
                                <div class="read-more-btn text-right">
                                    <button>Read more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_blog end -->
   
@endsection