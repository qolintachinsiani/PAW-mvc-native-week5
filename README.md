# MVC PHP Native - Data Buku

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native dengan tema Data Buku.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi
1. Clone atau salin project ke folder web server (`htdocs` XAMPP).
2. Import `database/buku.sql` ke dalam phpMyAdmin.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka `http://localhost/mvc-native/public/index.php`.

## Struktur MVC
- `app/models/` : akses dan operasi data buku.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML antarmuka buku.
- `config/` : konfigurasi koneksi database PDO.
- `database/` : skema dan data awal SQL (`buku.sql`).
- `public/` : entry point utama aplikasi.

## Fitur
- Menampilkan data buku
- Menambah data buku
- Mengubah data buku
- Menghapus data buku

## Histori Git
Gunakan `git log --oneline --graph --decorate` untuk melihat tahapan pengembangan.