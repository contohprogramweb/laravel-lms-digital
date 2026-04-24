# Laravel LMS Digital - Sistem Informasi Perpustakaan Digital

Sistem informasi perpustakaan digital yang dibangun dengan Laravel framework.

## Fitur

- Manajemen buku dan koleksi
- Sistem peminjaman dan pengembalian
- Manajemen member
- Dashboard admin
- Laporan dan statistik

## Requirement

- PHP >= 8.1
- Laravel >= 10.0
- MySQL >= 5.7
- Composer
- Node.js & npm

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/contohprogramweb/laravel-lms-digital.git
cd laravel-lms-digital
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan konfigurasi database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_lms
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Migration

```bash
php artisan migrate
php artisan db:seed
```

### 6. Jalankan Application

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## Struktur Folder

```
laravel-lms-digital/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   └── Services/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   └── js/
├── routes/
├── public/
├── storage/
├── tests/
├── config/
└── bootstrap/
```

## Lisensi

MIT License
