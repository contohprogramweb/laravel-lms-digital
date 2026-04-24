<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel LMS Digital - Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .feature-box {
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 48px;
            color: #667eea;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-book"></i> LMS Digital
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Sistem Informasi Perpustakaan Digital</h1>
            <p class="lead mb-4">Kelola koleksi buku, peminjaman, dan anggota dengan mudah dan efisien</p>
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg">Masuk ke Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-light btn-lg">Mulai Sekarang</a>
            @endauth
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Fitur Unggulan</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                        <h5>Manajemen Buku</h5>
                        <p>Kelola data buku, pengarang, penerbit, dan kategori dengan mudah</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <h5>Manajemen Member</h5>
                        <p>Daftarkan dan kelola anggota perpustakaan secara terorganisir</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-arrow-left-right"></i>
                        </div>
                        <h5>Peminjaman & Pengembalian</h5>
                        <p>Catat peminjaman dan pengembalian buku dengan sistem tracking otomatis</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h5>Dashboard Analytics</h5>
                        <p>Lihat statistik dan laporan lengkap tentang aktivitas perpustakaan</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <h5>Pencarian Cepat</h5>
                        <p>Cari buku berdasarkan judul, pengarang, atau kategori dengan cepat</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h5>Manajemen Admin</h5>
                        <p>Kontrol penuh atas sistem dengan role dan permission yang fleksibel</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2026 Laravel LMS Digital. Built with Laravel & Bootstrap.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
