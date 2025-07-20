<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:06:42 GMT -->
<head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        @include('dashboard.layouts.css')
        <!-- Bootstrap Css -->
        <link href="{{ asset('/assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/assets/admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">


        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}assets/admin/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}assets/admin/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}assets/admin/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}assets/admin/images/logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn"
                            style="color: #000; background-color: #f0f011; border: 1px solid #ccc; border-radius: 4px;">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>


                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>


                      <a href="{{ route('home') }}" class="btn btn-success d-inline-flex align-items-center">
                            <i class="bx bx-home font-size-16 me-2"></i> Home Page
                        </a>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset(auth()->user()->photo ?? '/assets/admin/images/users/avatar-1.jpg') }}"
                                    alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ml-1">{{ auth()->user()->name ?? 'Henry' }}</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>

                                <div class="dropdown-divider"></div>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <a class="dropdown-item text-danger" href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout
                                </a>

                            </div>
                        </div>



                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span class="badge badge-pill badge-info float-right"></span>
                        <span style="color:hsl(53, 96.30%, 68.60%) !important; font-size:16px">Your Details</span>
                    </a>
                </li>
               

                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span>Add Teacher</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.teacher_add') }}">Add</a></li>
                        <li><a href="{{ route('admin.teacher_list') }}">List</a></li>
                    </ul>
                </li>
              

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                       @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © BMS LTD.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Tanvir Ahmed
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

       
        @include('dashboard.layouts.js')


        <!-- App js -->
        <script src="{{ asset('/assets/admin/js/app.js') }}"></script>
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->
</html>
