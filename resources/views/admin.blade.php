<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            background-color: #007bff;
            color: white;
            padding-top: 20px;
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
                        <img src="https://tse4.mm.bing.net/th?id=OIP.a1STWcCFH1q6dApgqWlUZwHaE3&pid=Api&P=0&h=180"
                            alt="Foto Profil"
                            class="rounded-circle"
                            style="width: 80px; height: 80px; object-fit: cover;">
                        <h5 class="mt-2">Admin</h5>
                    </div>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('adminhome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="{{ route('kategoriadmin') }}">Kategori</a>
                            <ul class="list-unstyled pl-3">
                                <li><a class="nav-link" href="#">Elektronik</a></li>
                                <li><a class="nav-link" href="#">Televisi</a></li>
                                <li><a class="nav-link" href="#">Mesin Cuci</a></li>
                                <li><a class="nav-link" href="#">Kendaraan</a></li>
                            </ul>
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

            <!-- Konten Utama -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="h2 mt-4">Data User</h1>
                <button class="btn btn-primary mb-3">Tambah</button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">info</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Paginasi -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </nav>
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