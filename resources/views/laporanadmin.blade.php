<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan</title>
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

        .form-laporan {
            margin-top: 20px;
        }

        .form-laporan textarea {
            resize: none;
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
                            <a class="nav-link active" href="{{ route('admin') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('kategoriadmin') }}">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('pembayaranadmin') }}">pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('laporanadmin') }}">Laporan</a>
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
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="container mt-5">
                    <h2 class="mb-4">Laporan</h2>
                    <!-- Riwayat Laporan -->
                    <div class="card mt-4">
                        <div class="card-header bg-dark text-white">Riwayat Laporan</div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Post</th>
                                        <th>Judul Laporan</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reports as $report)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $report->post->title ?? 'Tidak ada judul' }}</td>
                                        <td>{{ $report->judul }}</td>
                                        <td>{{ $report->deskripsi }}</td>
                                        <td>{{ $report->created_at->format('d M Y') }}</td>
                                        <td>{{ $report->status ?? 'Belum Diproses' }}</td>
                                        <td>
                                            <form action="{{ route('admin.report.approve', $report->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success">Setujui</button>
                                            </form>

                                            <form action="{{ route('admin.report.reject', $report->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

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