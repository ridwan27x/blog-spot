<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap Icons -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 70px;
            /* Account for the fixed navbar height */
        }

        .navbar {
            background-color: #f19800;
            border-bottom: 1px solid #ddd;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar input[type="search"] {
            width: 300px;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 4px;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #f7f7f7;
            padding-top: 20px;
            border-right: 1px solid #ddd;
            transition: all 0.3s ease;
            top: 70px;
            /* Align the sidebar with the fixed navbar */
            z-index: 999;
        }

        .sidebar.hide {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .sidebar a {
            padding: 10px 15px;
            display: flex;
            align-items: center;
            color: #333;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .content.shrink {
            margin-left: 0;
        }

        .content .post {
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #fff;
            margin-bottom: 20px;
            position: relative;
        }

        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content .post h5 {
            margin-bottom: 10px;
            margin-right: auto;
        }

        .post-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-info .right-info {
            display: flex;
            gap: 15px;
        }

        /* Icons */
        .action-icons {
            position: absolute;
            right: 15px;
            top: 15px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .post:hover .action-icons {
            opacity: 1;
        }

        /* Hide username on hover */
        .post:hover .username {
            opacity: 0;
            transition: opacity 0.3s;
        }

        /* Google Table */
        .google-table {
            display: none;
            position: absolute;
            top: 50px;
            right: 10px;
            background-color: white;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .google-table a {
            text-decoration: none;
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .google-table a:hover {
            background-color: #f1f1f1;
        }

        .google-table i {
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar d-flex justify-content-between align-items-center">
        <div class="ml-3">
            <i class="fas fa-bars" id="menu-toggle" style="cursor:pointer; font-size: 30px"></i>
        </div>
        <div class="mx-auto position-relative">
            <i class="fas fa-search position-absolute" style="left: 25px; top: 50%; transform: translateY(-55%);"></i>
            <input type="search" placeholder="Telusuri postingan" class="ml-3 pl-5" style="width: 590px;">
        </div>
        <div class="dropdown d-flex align-items-center position-relative">
            <i class="bi bi-grid-3x3-gap" style="font-size: 20px; margin-right: 10px; color: #4d4d4d;" id="googleDropdown"
                style="cursor:pointer;"></i>
            <img src="https://i.pinimg.com/736x/83/e0/3f/83e03f295542c38569adb4ec985b2bc6.jpg" alt="Profile Image" class="rounded-circle" style="width: 30px; height: 30px;" >
            <!-- Google Table -->
            <div class="google-table" id="googleTable">
                <a href="https://www.google.com" target="_blank"><i class="bi bi-google"></i> Telusuri</a>
                <a href="https://www.google.com/maps" target="_blank"><i class="bi bi-map"></i> Maps</a>
                <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i> YouTube</a>
                <a href="https://www.gmail.com" target="_blank"><i class="bi bi-envelope"></i> Gmail</a>
                <a href="https://meet.google.com" target="_blank"><i class="bi bi-camera-video"></i> Meet</a>
                <a href="https://drive.google.com" target="_blank"><i class="bi bi-cloud-arrow-up"></i> Drive</a>
                <a href="https://calendar.google.com" target="_blank"><i class="bi bi-calendar"></i> Kalender</a>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="{{ route('posts.create') }}"
            class="shadow p-3 bg-body-tertiary rounded-pill text-decoration-none d-flex align-items-center text-warning">
            <i class="bi bi-plus mr-2"></i> Postingan baru
        </a>
        <a href="{{ route('posts.index') }}" class="d-flex align-items-center">
            <i class="bi bi-card-list mr-2"></i> Postingan
        </a>
        <a href="#" class="d-flex align-items-center">
            <i class="bi bi-chat-left-text mr-2"></i> Komentar
        </a>
        <a href="#" class="d-flex align-items-center">
            <i class="bi bi-wallet mr-2"></i> Penghasilan
        </a>
        <a href="#" class="d-flex align-items-center">
            <i class="bi bi-file-earmark-text mr-2"></i> Halaman
        </a>
        <a href="#" class="d-flex align-items-center">
            <i class="bi bi-layout-text-window-reverse mr-2"></i> Tata Letak
        </a>
        <a href="#" class="d-flex align-items-center">
            <i class="bi bi-bookmark mr-2"></i> Daftar Bacaan
        </a>
        <a href="#" class="d-flex align-items-center">
            <i class="bi bi-gear mr-2"></i> Setelan
        </a>
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logout-link">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <i class="bi bi-box-arrow-left mr-2"></i> Logout
        </a>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script>
        document.getElementById('logout-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        });

        // JavaScript for opening/closing sidebar
        document.getElementById("menu-toggle").addEventListener("click", function() {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content");

            sidebar.classList.toggle("hide");
            content.classList.toggle("shrink");
        });

        // Show/Hide Google Table
        document.getElementById("googleDropdown").addEventListener("click", function() {
            var googleTable = document.getElementById("googleTable");
            googleTable.style.display = googleTable.style.display === "block" ? "none" : "block";
        });

        // Close Google Table when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('#googleDropdown')) {
                var googleTable = document.getElementById("googleTable");
                if (googleTable.style.display === "block") {
                    googleTable.style.display = "none";
                }
            }
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
