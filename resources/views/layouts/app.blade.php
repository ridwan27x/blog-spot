
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling for the sidebar */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #ffffff;
            overflow-x: hidden;
            transition: width 0.4s; /* Transisi untuk sidebar */
            padding-top: 55px;
            margin: 65px;
        }

        /* Styling untuk konten yang akan bergeser */
        .content {
            margin-left: 0;
            transition: margin-left 0.4s; /* Transisi untuk pergeseran konten */
        }

        .content.shifted {
            margin-left: 250px; /* Menggeser konten sejauh lebar sidebar */
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #000000;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #007bff;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 36px;
        }

        .openbtn {
            font-size: 18px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <style>
                .openbtn {
                    font-size: 18px;
                    cursor: pointer;
                    background-color: white; /* Mengubah background menjadi putih */
                    color: black; /* Warna teks (ikon ☰) menjadi hitam untuk kontras */
                    padding: 10px 15px;
                    border: none;
                    border-radius: 5px; /* Tambahkan border radius untuk memperhalus sudut */
                }
            
                .openbtn:hover {
                    background-color: #ddd; /* Saat di-hover, background akan menjadi abu-abu terang */
                }
            </style>

    @auth
            <!-- Button to open the sidebar (Menu Utama) -->
            <button class="openbtn" onclick="openNav()">☰</button>

            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            </a>
            
            <!-- Search Bar -->
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2 custom-search-input" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <!-- Link Bantuan, Masukan, Aplikasi Google -->
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
            @endauth

            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
            </ul>
        </div>
    </nav>

    <!-- Sidebar (Menu Utama) -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">Blog Baru 1</a>
        <a href="#">Blog Baru 2</a>
        <a href="#">Blog Baru 3</a>
        <a href="#">Blog Baru 4</a>
        <a href="#">Blog Baru 5</a>
    </div>
    <!-- Content Dashboard -->
    {{-- <div id="mainContent" class="container mt-5 content">
        <h1>Selamat Datang di Dashboard</h1>
        <p>Ini adalah area dashboard utama. Silakan sesuaikan dengan kebutuhan Anda.</p>
    </div> --}}

    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS and Sidebar Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
=======

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
                    blowan
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

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
                                       onclick="event.preventDefault();
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
