<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/dinipuspitasari/simple-library/actions"><img src="https://github.com/dinipuspitasari/simple-library/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-brightgreen" alt="License"></a>
</p>

# Simple Library

Simple Library adalah aplikasi perpustakaan berbasis **Laravel 12 + Jetstream**, dibuat untuk memudahkan manajemen buku, pengguna, dan peminjaman secara sederhana.

---

## Fitur

- Autentikasi pengguna dengan Jetstream
- Verifikasi email dan reset password
- CRUD Buku (Tambah, Edit, Hapus, Lihat)
- Manajemen Profil Pengguna
- API sederhana menggunakan Laravel Sanctum
- Kompatibel dengan MySQL

---

## Persiapan Project

### 1. Clone Repository

```bash
git clone https://github.com/dinipuspitasari/simple-library.git
cd simple-library
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies & Compile Frontend
```bash
npm install
npm run dev    # untuk development
npm run build  # untuk production
```

### 4. konfigurasi .env
salin file '.env.example' menjadi '.env'
```bash
cp .env.example .env
```
Edit file '.env' sesuai dengan database anda. misalnya 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_library
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application key & Migrasi Database

```bash
php artisan key:generate
php artisan migrate
php artisan migrate:fresh --seed #untuk migrate seeder
```

### 6. jalankan Server Lokal

```bash
php artisan serve
```

### 7. Login

Email : dini@gmail.com <br>
Password : password


---

# Stack Teknologi

- Backend : Laravel 12
- CSS & Frontend : Tailwind CSS/Flowbite
- Database : MYSQL

---
