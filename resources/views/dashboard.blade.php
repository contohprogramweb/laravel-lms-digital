<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laravel LMS Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            background: #2c3e50;
            color: white;
            min-height: 100vh;
            padding: 20px 0;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #34495e;
            padding-left: 25px;
        }
        .sidebar a.active {
            background: #667eea;
        }
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .stat-number {
            font-size: 32px;
            font-weight: bold;
            color: #667eea;
        }
        .stat-label {
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h5 class="mb-4 ps-3">
                    <i class="bi bi-book"></i> LMS Digital
                </h5>
                <a href="#" class="active">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
                <a href="#">
                    <i class="bi bi-book-fill"></i> Buku
                </a>
                <a href="#">
                    <i class="bi bi-person-fill"></i> Member
                </a>
                <a href="#">
                    <i class="bi bi-arrow-left-right"></i> Peminjaman
                </a>
                <a href="#">
                    <i class="bi bi-file-text"></i> Laporan
                </a>
                <a href="#">
                    <i class="bi bi-gear-fill"></i> Pengaturan
                </a>
                <hr>
                <a href="#">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">
                <!-- Top Bar -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h2>Dashboard</h2>
                        <p class="text-muted">Selamat datang di Sistem Informasi Perpustakaan Digital</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary">Hari Ini</button>
                            <button type="button" class="btn btn-outline-secondary active">Bulan Ini</button>
                            <button type="button" class="btn btn-outline-secondary">Tahun Ini</button>
                        </div>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="bi bi-book-fill" style="font-size: 24px; color: #667eea;"></i>
                            <div class="stat-number">1,245</div>
                            <div class="stat-label">Total Buku</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="bi bi-person-fill" style="font-size: 24px; color: #27ae60;"></i>
                            <div class="stat-number">856</div>
                            <div class="stat-label">Total Member</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="bi bi-arrow-left-right" style="font-size: 24px; color: #e74c3c;"></i>
                            <div class="stat-number">432</div>
                            <div class="stat-label">Buku Dipinjam</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="bi bi-exclamation-triangle-fill" style="font-size: 24px; color: #f39c12;"></i>
                            <div class="stat-number">28</div>
                            <div class="stat-label">Terlambat</div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="stat-card">
                            <h5 class="mb-3">Aktivitas Terbaru</h5>
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Anggota</th>
                                        <th>Aktivitas</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ahmad Hidayat</td>
                                        <td><span class="badge bg-success">Peminjaman</span> Buku "Laravel Tutorial"</td>
                                        <td>2 jam lalu</td>
                                    </tr>
                                    <tr>
                                        <td>Siti Nurhaliza</td>
                                        <td><span class="badge bg-primary">Pengembalian</span> Buku "PHP Basics"</td>
                                        <td>5 jam lalu</td>
                                    </tr>
                                    <tr>
                                        <td>Budi Santoso</td>
                                        <td><span class="badge bg-warning">Terlambat</span> 3 hari</td>
                                        <td>1 hari lalu</td>
                                    </tr>
                                    <tr>
                                        <td>Rini Wijaya</td>
                                        <td><span class="badge bg-success">Peminjaman</span> Buku "Web Development"</td>
                                        <td>2 hari lalu</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h5 class="mb-3">Kategori Buku</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Pemrograman</span>
                                    <span class="badge bg-primary">345</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Desain</span>
                                    <span class="badge bg-success">212</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Bisnis</span>
                                    <span class="badge bg-warning">198</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Sastra</span>
                                    <span class="badge bg-danger">234</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Fiksi</span>
                                    <span class="badge bg-info">256</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
