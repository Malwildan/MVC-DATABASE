# Implementasi Modul Ajar Laravel

Project ini merupakan penerapan dari modul ajar (bukan modul ajar itu sendiri), dengan implementasi materi:

- MVC dasar
- Login dengan Laravel Breeze
- Database Laravel (konfigurasi, migrasi, Eloquent ORM, Query Builder, relasi)

## Konfigurasi XAMPP (MySQL)

Atur file .env seperti berikut:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

## Menjalankan Project

1. Install dependency backend

	php "C:\ProgramData\composer\bin\composer" install

2. Install dependency frontend

	npm install

3. Generate key aplikasi

	php artisan key:generate

4. Jalankan migrasi

	php artisan migrate

5. Build asset frontend

	npm run build

6. Jalankan server lokal

	php artisan serve

## Endpoint Penting

- /register
- /login
- /dashboard
- /users
- /users/{id}
- /users/{id}/edit
- /database-module

## SQL Import XAMPP (CRUD User)

Jika ingin langsung import tabel users tanpa migrasi, gunakan file:

- database/sql/xampp_users_crud.sql

Langkah singkat:

1. Buka phpMyAdmin.
2. Pilih menu Import.
3. Pilih file database/sql/xampp_users_crud.sql.
4. Jalankan import.

Catatan:

- File SQL ini akan membuat database bernama nama_database jika belum ada.
- File SQL ini akan drop dan recreate tabel users.
- Password user contoh adalah: password.

## Ringkasan Penerapan Materi Database

- Migrasi users ditambah kolom active
- Migrasi posts dengan foreign key ke users
- Relasi Eloquent: User hasMany Post, Post belongsTo User
- Query Builder contoh where + orderBy
