<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         .sidebar {
            height: 100vh;
            background-color: #007bff;
            color: white;
            padding-top: 20px;
            position: fixed; 
            top: 0; 
            left: 0;
            width: 15%; 
        }

        .main-content {
            margin-left: 15%;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .sidebar a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <div class="text-center mb-3">
                        <img src="https://tse4.mm.bing.net/th?id=OIP.a1STWcCFH1q6dApgqWlUZwHaE3&pid=Api&P=0&h=180" alt="Foto Profil"
                            class="rounded-circle"
                            style="width: 80px; height: 80px; object-fit: cover;">
                        <h5 class="mt-2">Admin</h5>
                    </div>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('adminhome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('kategoriadmin') }}">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('laporanadmin') }}">pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('pembayaranadmin') }}">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="logout-link">Logout</a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-content">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://media.neliti.com/media/organisations/logo-257-kemkominfo.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">5 cara menjaga keamanan akun anda</h5>
                                    <p class="card-text">Cara membuat blog tidak sulit, bahkan orang yang tidak paham coding...</p>
                                    <p class="text-muted">20 min read | May 12, 2024</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://tse2.mm.bing.net/th?id=OIP.gkJXDS-VjxY4qfZV56WtzgHaEn&pid=Api&P=0&h=180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">cara menyelamatkan diri dari gempa</h5>
                                    <p class="card-text">Tutorial lengkap cara membuat website menggunakan WordPress...</p>
                                    <p class="text-muted">7 min read | Nov 21, 2024</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://www.tagar.id/Asset/uploads2019/1567005153206-gedung-dpr-ri.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">cara menjadi anggota...</h5>
                                    <p class="card-text">Peter Kambey sebagai brand ambassador terbaru Niagahoster...</p>
                                    <p class="text-muted">4 min read | Dec 22, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="text-center bg-dark text-white py-1 mt-5">
                    <p class="mb-5">Created by Iwan & Fajar © 2024</p>
                    <p class="mt-3">All rights reserved.</p>
                </footer>
            </main>
        </div>
    </div>

    <script>
        document.getElementById('logout-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
