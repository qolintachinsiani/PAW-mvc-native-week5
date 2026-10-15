CREATE DATABASE IF NOT EXISTS data_buku
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE data_buku;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_buku VARCHAR(20) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO buku (kode_buku, judul, penulis, tahun_terbit) VALUES
('BK-001', 'Laut Bercerita', ' Leila S. Chudori', 2023),
('BK-002', 'Laskar Pelangi ', 'Andrea Hirata', 2024),
('BK-003', 'Home Sweet Loan', 'Almira Bastari', 2022);