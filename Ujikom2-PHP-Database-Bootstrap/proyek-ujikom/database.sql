-- ============================================================
-- UJIAN KOMPREHENSIF 2 — SOAL PRAKTIK
-- FILE: database.sql
-- ============================================================
-- PETUNJUK:
--   1. Buka phpMyAdmin (http://localhost/phpmyadmin)
--   2. Klik tab "SQL"
--   3. Copy-paste SEMUA isi file ini ke area query
--   4. Lengkapi bagian yang bertanda ________
--   5. Klik tombol "Go" untuk menjalankan
--   6. Ganti XXXX dengan 4 NIM terakhir kamu
-- ============================================================


-- ============================================================
-- SOAL 1: Lengkapi keyword SQL untuk MEMBUAT DATABASE baru
-- Hint: Keyword SQL untuk membuat database adalah "CREATE ..."
-- ============================================================
CREATE ________ ujikom_mahasiswa_XXXX;

-- Pilih database yang baru dibuat
USE ujikom_mahasiswa_XXXX;


-- ============================================================
-- SOAL 2: Lengkapi atribut agar kolom id_jurusan bernilai
--         otomatis bertambah (1, 2, 3, ...) setiap ada data baru
-- Hint: Atribut ini membuat angka naik otomatis
-- ============================================================
CREATE TABLE jurusan (
    id_jurusan INT ________ PRIMARY KEY,
    nama_jurusan VARCHAR(100) NOT NULL
);


-- ============================================================
-- SOAL 3: Lengkapi atribut agar kolom "nama" TIDAK BOLEH KOSONG
-- Hint: Constraint SQL yang berarti "wajib diisi"
-- ============================================================
CREATE TABLE mahasiswa (
    id_mhs INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) ________,
    nim VARCHAR(20) NOT NULL,
    id_jurusan INT,
    ipk FLOAT,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id_jurusan)
);


-- ============================================================
-- SOAL 4: Lengkapi keyword SQL untuk MEMASUKKAN DATA ke tabel
-- Hint: Keyword DML untuk menambah data = "... INTO"
-- ============================================================
________ INTO jurusan (nama_jurusan) VALUES
('Teknik Telekomunikasi'),
('Teknik Informatika'),
('Teknik Elektro');

INSERT INTO mahasiswa (nama, nim, id_jurusan, ipk) VALUES
('Andi Pratama', '101001', 1, 3.75),
('Siti Nurhaliza', '101002', 1, 3.50),
('Budi Santoso', '102001', 2, 3.85),
('Dewi Lestari', '102002', 2, 3.60),
('Rizky Ramadhan', '103001', 3, 3.45),
('Ayu Wandira', '103002', 3, 3.90),
('Fajar Nugroho', '101003', 1, 3.70),
('Maya Sari', '102003', 2, 3.55);


-- ============================================================
-- SOAL 5: Lengkapi query SELECT untuk MENAMPILKAN SEMUA DATA
-- Hint: Tanda apa yang digunakan untuk memilih "semua kolom"?
-- ============================================================
SELECT ________ FROM mahasiswa;

-- ============================================================
-- Setelah kalian melengkapi semua yang ada di file database.sql, 
-- langkah selanjutnya adalah masuk ke phpMyAdmin
-- Klik tab "SQL"
-- copy semua query yang sudah dilengkapi di atas.
-- paste di area query, lalu klik tombol "Go" untuk menjalankan query tersebut.
-- pastikan tidak ada error yang muncul