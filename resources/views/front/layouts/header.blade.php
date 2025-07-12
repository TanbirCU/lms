 <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-headphone"></span>
                                    <p class="phone-number">+0123456789</p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name">support@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                    <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/assets/front/img/logo/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">
                                <ul>
                                    <li class="toggle-search-icon"><a href="#"><span class="ti-search"></span>
                                            <div class="toggle-search-box">
                                                <form action="#" id="searchbox">
                                                    <input placeholder="Search" type="text">
                                                    <button class="button-search"><span class="ti-search"></span></button>
                                                </form>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="shopping-cart"><a href="#"><span class="ti-shopping-cart"></span>
                                            <span class="shopping-counter">0</span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">Home</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="index.html">Home style 1</a>
                                                </li>
                                                <li>
                                                    <a href="index_2.html">Home style 2</a>
                                                </li>
                                                <li>
                                                    <a href="index_3.html">Home style 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">PAGES</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about_us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="advisors.html">Advisors</a>
                                                </li>
                                                <li>
                                                    <a href="advisors_details.html">Advisors Details</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">ELEMENTS</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="events_01.html">Events 01</a>
                                                </li>
                                                <li>
                                                    <a href="events_02.html">Events 02</a>
                                                </li>
                                                <li>
                                                    <a href="event_details.html">Events Details</a>
                                                </li>
                                                <li>
                                                    <a href="shop_pages.html">Shop</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="course_01.html">Courses</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="course_01.html">Courses 01</a>
                                                </li>
                                                <li>
                                                    <a href="course_02.html">Courses 02</a>
                                                </li>
                                                <li>
                                                    <a href="course_03.html">Courses 03</a>
                                                </li>
                                                <li>
                                                    <a href="course_details.html">Course Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="events_01.html">NEWS</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="grid_news.html">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="standard_blog.html">Blog Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="news_details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact_us.html">CONTACT</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->