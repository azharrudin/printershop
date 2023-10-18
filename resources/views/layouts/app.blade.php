<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- basic -->
    <!-- site metas -->
    <title>PrinterShop - Pusat Printer </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{asset('style/images/fevicon.png')}}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{asset('style/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('style/css/responsive.css')}}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{asset('style/css/colors.css')}}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{asset('style/css/bootstrap-select.css')}}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{asset('style/css/perfect-scrollbar.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('style/css/custom.css')}}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <div id="app">
        @auth
        <div class="full_container">
            <div class="inner_container">
                <!-- Sidebar  -->
                <nav id="sidebar">
                    <div class="sidebar_blog_1">
                        <div class="sidebar-header">
                            <div class="logo_section">
                                <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_blog_2">
                        <h4>Admin Page</h4>
                        <ul class="list-unstyled components">
                            <li>
                                <a href="kontrol_barang">
                                    <i class="fa fa-truck red_color"></i> <span>Tambah Barang</span></a>
                            </li>
                            <li>
                                <a href="kontrol_barang">
                                    <i class="fa fa-truck red_color"></i> <span>Edit Barang</span></a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class="fa fa-folder-open yellow_color"></i> <span>Daftar Barang</span></a>
                            </li>
                    </div>
                </nav>
                <!-- end sidebar -->
                <!-- right content -->
                <div id="content">
                    <!-- topbar -->
                    <div class="topbar">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="full">
                                <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                                <div class="right_topbar">
                                    <div class="icon_info">
                                        <ul class="user_profile_dd">
                                            <li>
                                                <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">Admin</span></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                                </div>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>

                    </div>
                    <div class="midde_cont">
                        <div class="container-fluid">
                            <div class="row column_title">
                                <div class="col-md-12">
                                    <div class="page_title">
                                        <h2>Dashboard</h2>
                                    </div>
                                </div>
                            </div>
                            <div id="main">
                                @yield('content')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!---
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto">

                    </ul>

                   
                    <ul class="navbar-nav ms-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
            @endauth


            <script src="{{asset('style/js/jquery.min.js')}}"></script>
            <script src="{{asset('style/js/popper.min.js')}}"></script>
            <script src="{{asset('style/js/bootstrap.min.js')}}"></script>
            <!-- wow animation -->
            <script src="{{asset('style/js/animate.js')}}"></script>
            <!-- select country -->
            <script src="{{asset('style/js/bootstrap-select.js')}}"></script>
            <!-- owl carousel -->
            <script src="{{asset('style/js/owl.carousel.js')}}"></script>
            <!-- chart js -->
            <script src="{{asset('style/js/Chart.min.js')}}"></script>
            <script src="{{asset('stylejs/Chart.bundle.min.js')}}"></script>
            <script src="{{asset('style/js/utils.js')}}"></script>
            <script src="{{asset('style/js/analyser.js')}}"></script>
            <!-- nice scrollbar -->
            <script src="{{asset('style/js/perfect-scrollbar.min.js')}}"></script>
            <script>
                var ps = new PerfectScrollbar('#sidebar');
            </script>
            <!-- custom js -->
            <script src="{{asset('style')}}js/custom.js"></script>
            <script src="{{asset('style/js/chart_custom_style1.js')}}"></script>
        </div>
</body>

</html>