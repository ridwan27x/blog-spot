<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pembayaran</title>
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
                            <a class="nav-link active" href="{{ route('laporanadmin') }}">Pembayaran</a>
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

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            Transaksi Keuangan
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Transaksi</h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jenis Transaksi</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>22 Sep 2024</td>
                                        <td>Pembelian</td>
                                        <td>Rp500.000</td>
                                        <td>Lunas</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>20 Sep 2024</td>
                                        <td>Penjualan</td>
                                        <td>Rp1.200.000</td>
                                        <td>Lunas</td>
                                    </tr>
                                    <!-- Tambahkan lebih banyak baris sesuai dengan data transaksi -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Lakukan Pembayaran</h5>
                            <form>
                                <div class="form-group">
                                    <label for="amount">Jumlah Pembayaran</label>
                                    <input type="number" class="form-control" id="amount" placeholder="Masukkan jumlah">
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <input type="text" class="form-control" id="description" placeholder="Deskripsi transaksi">
                                </div>
                                <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                            </form>
                        </div>
                    </div>
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