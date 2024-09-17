<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Dashboard
            </a>

            <!-- Menu Utama -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search Bar -->
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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

                    <!-- Tombol Logout -->
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                           Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Dashboard -->
    <div class="container mt-5">
        <h1>Selamat Datang di Dashboard</h1>
        <p>Ini adalah area dashboard utama. Silakan sesuaikan dengan kebutuhan Anda.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
