<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>
                
                    <!-- Search Bar (Lebih Sedang dan di Tengah) -->
                    <form class="d-flex mx-auto" role="search" style="width: 50%;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
        </nav>

        <!-- Search Bar and Navigation Links -->
        <div class="container mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Button to open the sidebar -->
                <button class="openbtn" onclick="openNav()">☰</button>

                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://via.placeholder.com/40" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                </a>
                
                {{-- <!-- Search Bar -->
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2 custom-search-input" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}

                <!-- Links to Help, Feedback, Google Apps -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Masukan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="googleAppsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Aplikasi Google
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="googleAppsDropdown">
                            <li><a class="dropdown-item" href="https://mail.google.com" target="_blank">Gmail</a></li>
                            <li><a class="dropdown-item" href="https://drive.google.com" target="_blank">Google Drive</a></li>
                            <li><a class="dropdown-item" href="https://docs.google.com" target="_blank">Google Docs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://calendar.google.com" target="_blank">Google Calendar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sidebar (Menu Utama) -->
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#">Blog Baru 1</a>
            <a href="#">Blog Baru 2</a>
            <a href="#">Blog Baru 3</a>
            <a href="#">Blog Baru 4</a>
            <a href="#">Blog Baru 5</a>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
</body>
</html>
