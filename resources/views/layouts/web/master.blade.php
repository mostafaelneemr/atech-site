<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('layouts.web.style')
    {{-- make width logo 100% --}}
    <style>
        #logowid{
            width: 100%;
        }
    </style>
</head>

<body class="template-color-26 template-font-1">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Start Preloader  -->
    <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div class=""> <img src="{{asset('website/assets/img/icons/brook-preloader.gif')}}" alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader  -->
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="br_header header-default position-from--top header-transparent light-logo--version haeder-fixed-width headroom--sticky header-mega-menu clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__wrapper mr--0">
                            <!-- Header Left -->
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{asset(setting('site_logo'))}}" id="logowid" alt="Brook Images">
                                    </a>
                                </div>
                            </div>
                            <!-- Mainmenu Wrap -->
                            <div class="mainmenu-wrapper d-none d-lg-block">
                                <nav class="page_nav">
                                    <ul class="mainmenu">

                                        <li class="lavel-1"><a href="{{ route('home') }}"><span>Home</span></a></li>
                                        @if (\App\Models\admin\Active_section::where('name', 'about_page')->first()->value == 1)
                                        <li class="lavel-1"><a href="{{ route('about') }}"><span>About</span></a></li>
                                        @endif

                                        @if (\App\Models\admin\Active_section::where('name', 'service_page')->first()->value == 1)
                                        <li class="lavel-1"><a href="{{ route('service') }}"><span>Services</span></a></li>
                                        @endif

                                        @if (\App\Models\admin\Active_section::where('name', 'blog_page')->first()->value == 1)
                                        <li class="lavel-1"><a href="{{ route('blogs') }}"><span>Blogs</span></a></li>
                                        @endif

                                        @if (\App\Models\admin\Active_section::where('name', 'project_page')->first()->value == 1)
                                        <li class="lavel-1"><a href="{{ route('projects') }}"><span>Projects</span></a></li>
                                        @endif
                                        {{-- <li class="lavel-1 with--drop slide-dropdown"><a href="#"><span>Pages</span></a> --}}
                                            <!-- Start Dropdown Menu -->
                                            {{-- <ul class="dropdown__menu">
                                                <li><a href="inner-page/education/service.html"><span>Service</span></a></li>
                                                <li><a href="inner-page/education/team.html"><span>Team</span></a></li>
                                            </ul> --}}
                                            <!-- End Dropdown Menu -->
                                        {{-- </li> --}}

                                        {{-- <li class="lavel-1 with--drop slide-dropdown"><a href="inner-page/education/portfolio.html"><span>Portfolio</span></a>
                                            <!-- Start Dropdown Menu -->
                                            <ul class="dropdown__menu">
                                                <li><a href="inner-page/education/portfolio.html"><span>Portfolio</span></a></li>
                                                <li><a href="inner-page/education/portfolio-details.html"><span>Portfolio Details</span></a></li>
                                            </ul>
                                            <!-- End Dropdown Menu -->
                                        </li> --}}

                                        {{-- <li class="lavel-1 with--drop slide-dropdown"><a href="inner-page/education/blog.html"><span>Blog</span></a>
                                            <!-- Start Dropdown Menu -->
                                            <ul class="dropdown__menu">
                                                <li><a href="inner-page/education/blog.html"><span>Blog</span></a></li>
                                                <li><a href="inner-page/education/blog-details.html"><span>Blog Details</span></a></li>
                                            </ul>
                                            <!-- End Dropdown Menu -->
                                        </li> --}}

                                        <li class="lavel-1"><a href="{{ route('contact') }}"><span>Contact</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Right -->
                            <div class="header-right">
                                <!-- Start Popup Search Wrap -->
                                {{-- <div class="popup-search-wrap">
                                    <a class="btn-search-click" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div> --}}
                                <!-- End Popup Search Wrap -->
                                <!-- Start Hamberger -->
                                <div class="manu-hamber popup-mobile-click d-block d-lg-none light-version d-block d-xl-none pl_md--10 pl_sm--10">
                                    <div>
                                        <i></i>
                                    </div>
                                </div>
                                <!-- End Hamberger -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--// Header -->

        <!-- Start Popup Menu -->
        <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ setting('site_logo') }}" alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                        <li><a href="{{ route('home') }}"><span>Home</span></a></li>
                        @if (\App\Models\admin\Active_section::where('name', 'about_page')->first()->value == 1)
                        <li><a href="{{ route('about') }}"><span>About</span></a></li>
                        @endif

                        @if (\App\Models\admin\Active_section::where('name', 'service_page')->first()->value == 1)
                        <li><a href="{{ route('service') }}"><span>Services</span></a></li>
                        @endif

                        @if (\App\Models\admin\Active_section::where('name', 'blog_page')->first()->value == 1)
                        <li><a href="{{ route('blogs') }}"><span>Blogs</span></a></li>
                        @endif

                        @if (\App\Models\admin\Active_section::where('name', 'project_page')->first()->value == 1)
                        <li><a href="{{ route('projects') }}"><span>Projects</span></a></li>
                        @endif

                        {{-- <li class="has-mega-menu"><a href="#"><span>Pages</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="inner-page/education/service.html"><span>Service</span></a></li>
                                <li><a href="inner-page/education/team.html"><span>Team</span></a></li>
                            </ul>
                        </li> --}}

                        {{-- <li class="has-mega-menu"><a href="#"><span>Portfolio</span></a>

                                <!-- Start Dropdown Menu -->
                                <ul class="object-submenu">
                                <li><a href="inner-page/education/portfolio.html"><span>Portfolio</span></a></li>
                                <li><a href="inner-page/education/portfolio-details.html"><span>Portfolio Details</span></a></li>
                            </ul>
                        </li> --}}

                        {{-- <li class="has-mega-menu"><a href="#"><span>Blog</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="inner-page/education/blog.html"><span>Blog</span></a></li>
                                <li><a href="inner-page/education/blog-details.html"><span>Blog Details</span></a></li>
                            </ul>
                        </li> --}}

                        <li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popup Menu -->

        <!-- Start Brook Search Popup -->
        <div class="brook-search-popup">
            <div class="inner">
                <div class="search-header">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('website/assets/img/logo/brook-black.png')}}" alt="logo images">
                        </a>
                    </div>
                    <a href="#" class="search-close"></a>
                </div>
                <div class="search-content">
                    <form action="#">
                        <label>
                            <input type="search" placeholder="Enter search keyword…">
                        </label>
                        <button class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Brook Search Popup -->


        <!-- START REVOLUTION SLIDER -->
        <div class="slider-revoluation">
            @yield('slider')
        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- Page Conttent -->
        <main class="page-content">
            @yield('content')
        </main>
        <!--// Page Conttent -->
    </div>


    {{-- footer --}}
    @include('layouts.web.footer')

    <!--// Wrapper -->
    <!-- Js Files -->
    @include('layouts.web.script')

    @stack('js')    
</body>

</html>