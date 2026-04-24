# Laravel LMS Digital

Sistem Informasi Perpustakaan Digital menggunakan Laravel 10

## Fitur Utama
- 📚 Manajemen Buku Digital
- 👥 Manajemen Pengguna (Admin, Librarian, Member)
- 📖 Sistem Peminjaman Buku
- 📑 Kategori Buku
- 🔐 Authentication dengan Sanctum

## Persyaratan Sistem
- PHP 8.1 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi
- Composer
- Node.js & NPM (opsional)

## Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/contohprogramweb/laravel-lms-digital.git
cd laravel-lms-digital
```

### 2. Install Dependencies
```bash
composer install
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
```

### 6. Seed Database (Opsional)
```bash
php artisan db:seed
```

### 7. Jalankan Server Development
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## Struktur Project
```
laravel-lms-digital/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── config/
├── database/
│   └── migrations/
├── routes/
├── storage/
├── public/
└── resources/
    └── views/
```

## Database Schema

### Users Table
- id
- name
- email
- password
- role (admin, librarian, member)
- timestamps

### Books Table
- id
- title
- author
- isbn
- description
- category_id (FK)
- published_year
- total_copies
- available_copies
- timestamps

### Categories Table
- id
- name
- description
- timestamps

### Borrowings Table
- id
- user_id (FK)
- book_id (FK)
- borrowed_at
- due_date
- returned_at
- status (borrowed, returned, overdue)
- timestamps

## API Endpoints

### Books
- `GET /api/v1/books` - List semua buku
- `POST /api/v1/books` - Tambah buku baru
- `GET /api/v1/books/{id}` - Detail buku
- `PUT /api/v1/books/{id}` - Update buku
- `DELETE /api/v1/books/{id}` - Hapus buku

### Users
- `GET /api/v1/users` - List semua pengguna
- `POST /api/v1/users` - Tambah pengguna baru
- `GET /api/v1/users/{id}` - Detail pengguna
- `PUT /api/v1/users/{id}` - Update pengguna
- `DELETE /api/v1/users/{id}` - Hapus pengguna

### Categories
- `GET /api/v1/categories` - List semua kategori
- `POST /api/v1/categories` - Tambah kategori baru
- `GET /api/v1/categories/{id}` - Detail kategori
- `PUT /api/v1/categories/{id}` - Update kategori
- `DELETE /api/v1/categories/{id}` - Hapus kategori

## Troubleshooting

### Error: "No application encryption key has been specified"
```bash
php artisan key:generate
```

### Error: "Connection refused"
Pastikan MySQL server sudah berjalan dan konfigurasi database di `.env` sudah benar.

## Kontribusi
Silakan buat pull request dengan branch baru untuk fitur atau perbaikan.

## License
MIT License

## Contact
Untuk pertanyaan atau saran, silakan hubungi developer.
