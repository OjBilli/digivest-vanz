<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/admitro/Vertical-IconSidedar-Light/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Oct 2020 02:52:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Admitro - Laravel Bootstrap Admin Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="laravel admin dashboard, best laravel admin panel, laravel admin dashboard, php admin panel template, blade template in laravel, laravel dashboard template, laravel template bootstrap, laravel simple admin panel,laravel dashboard template,laravel bootstrap 4 template, best admin panel for laravel,laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel admin template bootstrap 4" />

    <!-- Title -->
    <title>DASHBORD - ATLAS MARKET EDGERS</title>

    <!--Favicon -->
    <link rel="icon" href="/home_asset/assets/images/brand/lines.png" type="image/x-icon" />

    <!--Bootstrap css -->
    <link href="/home_asset/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="/home_asset/assets/css/style.css" rel="stylesheet" />
    <link href="/home_asset/assets/css/dark.css" rel="stylesheet" />
    <link href="/home_asset/assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="/home_asset/assets/css/animated.css" rel="stylesheet" />

    <!--Sidemenu css -->
    <link href="/home_asset/assets/css/sidemenu.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="/home_asset/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!---Icons css-->
    <link href="/home_asset/assets/css/icons.css" rel="stylesheet" />

    <!-- Simplebar css -->
    <link rel="stylesheet" href="/home_asset/assets/plugins/simplebar/css/simplebar.css">

    <!-- Color Skin css -->
    <link id="theme" href="/home_asset/assets/colors/color1.css" rel="stylesheet" type="text/css" />

    <!-- Switcher css -->
    <link rel="stylesheet" href="/home_asset/assets/switcher/css/switcher.css">
    <link rel="stylesheet" href="/home_asset/assets/switcher/demo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="app sidebar-mini">

    <!-- Start Switcher -->

    <!-- End Switcher -->

    <!---Global-loader-->
    <div id="global-loader">
        <img src="/home_asset/assets/images/svgs/loader.svg" alt="loader">
    </div>
    <!--- End Global-loader-->
    <!-- Page -->
    <div class="page">
        <div class="page-main">
            <aside class="app-sidebar">
                <div class="app-sidebar__logo">
                    <a class="header-brand" href="{{route('admin.dashboard')}}">
                        <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"  class="header-brand-img desktop-lgo"
                            alt="Admintro logo">
                        <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"  class="header-brand-img dark-logo"
                            alt="Admintro logo">
                        <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%" class="header-brand-img mobile-logo"
                            alt="Admintro logo">
                        <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"
                            class="header-brand-img darkmobile-logo" alt="Admintro logo">
                    </a>
                </div>
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="user-pic">
                            <img src="/home_asset/assets/images/users/avatar.png" alt="user-img"
                                class="avatar-xl rounded-circle mb-1">
                        </div>
                        <div class="user-info">
                            <h5 class=" mb-1">{{ Auth::user()->name }} <i
                                    class="ion-checkmark-circled  text-success fs-12"></i></h5>
                            <span class="text-muted app-sidebar__user-name text-sm">ADMIN</span>
                        </div>
                    </div>

                </div>
                <ul class="side-menu app-sidebar3">
                    <li class="side-item side-item-category mt-4">Main Tabs</li>


                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="index.html#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z" />
                                </svg>
                            <span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href=" {{route('admin.dashboard') }}" class="slide-item">ADMIN TOOL</a></li>


                        </ul>
                    </li>


                    <li class="side-item side-item-category">Support Mode</li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="index.html#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z" />
                                </svg>
                            <span class="side-menu__label">Delete User</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li class="sub-menu">

                                <ul class="slide-menu">
                                    <li><a class="sub-slide-item" href=" {{route('admin.delete') }}">Block</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="index.html#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z" />
                                </svg>
                            <span class="side-menu__label">User Database Info</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li class="sub-menu">

                                <ul class="slide-menu">
                                    <li><a class="sub-slide-item" href=" {{route('admin.database') }}">Database</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="index.html#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
                                </svg>
                            <span class="side-menu__label">Admin Wallets</span><span
                                class="badge badge-success side-badge">6</span></a>
                        <ul class="slide-menu">

                            <li><a href=" {{route('admin.wallet') }}" class="slide-item"> Wallet</a></li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="index.html#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M17.73 12.02l3.98-3.98c.39-.39.39-1.02 0-1.41l-4.34-4.34c-.39-.39-1.02-.39-1.41 0l-3.98 3.98L8 2.29C7.8 2.1 7.55 2 7.29 2c-.25 0-.51.1-.7.29L2.25 6.63c-.39.39-.39 1.02 0 1.41l3.98 3.98L2.25 16c-.39.39-.39 1.02 0 1.41l4.34 4.34c.39.39 1.02.39 1.41 0l3.98-3.98 3.98 3.98c.2.2.45.29.71.29.26 0 .51-.1.71-.29l4.34-4.34c.39-.39.39-1.02 0-1.41l-3.99-3.98zM12 9c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-4.71 1.96L3.66 7.34l3.63-3.63 3.62 3.62-3.62 3.63zM10 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2 2c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2.66 9.34l-3.63-3.62 3.63-3.63 3.62 3.62-3.62 3.63z" />
                                </svg>
                            <span class="side-menu__label">Logout</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href=" {{ route('logout')  }}" onclick="logout()" class="slide-item"> LOGOUT</a></li>
                            <form action=" {{ route('logout')  }}" class="logout-form" method="POST">@csrf</form>
                        </ul>
                    </li>




                </ul>
            </aside>
            <!--aside closed-->
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <!--app header-->
                    <div class="app-header header">
                        <div class="container-fluid">
                            <div class="d-flex">
                                <a class="header-brand" href="{{ route('admin.dashboard') }}">
                                    <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"
                                        class="header-brand-img desktop-lgo" alt="Admintro logo">
                                    <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"
                                        class="header-brand-img dark-logo" alt="Admintro logo">
                                    <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"
                                        class="header-brand-img mobile-logo" alt="Admintro logo">
                                    <img src="/vil/assets/images/logo/loho.png" width="100%" height="60%"
                                        class="header-brand-img darkmobile-logo" alt="Admintro logo">
                                </a>
                                <div class="app-sidebar__toggle" data-toggle="sidebar">
                                    <a class="open-toggle" href="index.html#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-align-left header-icon mt-1">
                                            <line x1="17" y1="10" x2="3" y2="10"></line>
                                            <line x1="21" y1="6" x2="3" y2="6"></line>
                                            <line x1="21" y1="14" x2="3" y2="14"></line>
                                            <line x1="17" y1="18" x2="3" y2="18"></line>
                                        </svg>
                                    </a>
                                </div>

                                <div class="d-flex order-lg-2 ml-auto">

                                    <div class="dropdown   header-fullscreen">
                                        <a class="nav-link icon full-screen-link p-0" id="fullscreen-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z" />
                                                </svg>
                                        </a>
                                    </div>

                                    <div class="dropdown profile-dropdown">
                                        <a href="index.html#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                            <span>
                                                <img src="/home_asset/assets/images/users/avatar.png" alt="img"
                                                    class="avatar avatar-md brround">
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                                            <div class="text-center">
                                                <a href="{{ Auth::user()->name }}"
                                                    class="dropdown-item text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</a>
                                                <span class="text-center user-semi-title">ADMIN</span>
                                                <div class="dropdown-divider"></div>
                                            </div>

                                            <a class="dropdown-item d-flex" href=" {{ route('logout')  }}"
                                                onclick="logout()">
                                                <svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24"
                                                    width="24">
                                                    <g>
                                                        <rect fill="none" height="24" width="24" />
                                                    </g>
                                                    <g>
                                                        <path
                                                            d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
                                                    </g>
                                                </svg>
                                                <div class="">Sign Out</div>
                                                <form action=" {{ route('logout')  }}" class="logout-form"
                                                    method="POST">@csrf</form>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/app header-->
                    <!--Page header-->

                    @yield('content')
                </div>
            </div>


            <!-- End app-content-->
        </div>

        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2015 <a href="#"> <a href="www.exoduscu.com">ATLAS MARKET EDGERS</a> All
                            rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div><!-- End Page -->
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    <!-- Jquery js-->
    <script src="/home_asset/assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap4 js-->
    <script src="/home_asset/assets/plugins/bootstrap/popper.min.js"></script>
    <script src="/home_asset/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Othercharts js-->
    <script src="/home_asset/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!-- Circle-progress js-->
    <script src="/home_asset/assets/js/circle-progress.min.js"></script>

    <!-- Jquery-rating js-->
    <script src="/home_asset/assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Sidemenu js-->
    <script src="/home_asset/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- P-scroll js-->
    <script src="/home_asset/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
    <script src="/home_asset/assets/plugins/p-scrollbar/p-scroll1.js"></script>
    <script src="/home_asset/assets/plugins/p-scrollbar/p-scroll.js"></script>


    <!--INTERNAL Peitychart js-->
    <script src="/home_asset/assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="/home_asset/assets/plugins/peitychart/peitychart.init.js"></script>

    <!--INTERNAL Apexchart js-->
    <script src="/home_asset/assets/js/apexcharts.js"></script>

    <!--INTERNAL ECharts js-->
    <script src="/home_asset/assets/plugins/echarts/echarts.js"></script>

    <!--INTERNAL Chart js -->
    <script src="/home_asset/assets/plugins/chart/chart.bundle.js"></script>
    <script src="/home_asset/assets/plugins/chart/utils.js"></script>

    <!-- INTERNAL Select2 js -->
    <script src="/home_asset/assets/plugins/select2/select2.full.min.js"></script>
    <script src="/home_asset/assets/js/select2.js"></script>

    <!--INTERNAL Moment js-->
    <script src="/home_asset/assets/plugins/moment/moment.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--INTERNAL Index js-->
    <script src="/home_asset/assets/js/index1.js"></script>

    <!-- Simplebar JS -->
    <script src="/home_asset/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <!-- Custom js-->
    <script src="/home_asset/assets/js/custom.js"></script>

    <!-- Switcher js-->
    <script src="/home_asset/assets/switcher/js/switcher.js"></script>

    <script>
        function logout() {
            event.preventDefault();
            $('.logout-form').submit();
        }

    </script>


    @if (session('error'))
    <script>
        swal(
            'Oops!',
            '{{ session("error") }}',
            'error'
        )

    </script>
    @endif

    @if (session('success'))
    <script>
        swal(
            'Good Job!',
            '{{ session("success") }}',
            'success'
        )

    </script>
    @endif
</body>
</html>
