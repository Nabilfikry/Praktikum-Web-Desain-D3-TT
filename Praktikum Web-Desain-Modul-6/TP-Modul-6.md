# TUGAS PENDAHULUAN — MODUL 6: DATABASE

## Tujuan Tugas
Membuat database MySQL menggunakan query SQL melalui **phpMyAdmin** dengan menggunakan XAMPP / Laragon sebagai localhost nya. Database yang dibuat pada tugas ini akan digunakan kembali untuk pengembangan web (PHP + HTML) pada saat praktikum di hari H.

## Alat & Bahan
1. Laptop dengan **XAMPP / Laragon** terinstal
2. Browser untuk mengakses **phpMyAdmin**

---

## Panduan Persiapan

### 1. Menjalankan XAMPP / Laragon
1. Buka aplikasi **XAMPP / Laragon Control Panel**.
2. Klik **Start** pada modul **Apache** dan **MySQL** (khusus XAMPP).
3. Pastikan kedua modul berstatus hijau (Running).
4. Untuk Laragon, cukup jalankan **Start All**

### 2. Membuka phpMyAdmin
1. Buka browser.
2. Ketik `http://localhost/phpmyadmin` pada address bar, lalu tekan Enter.
3. Halaman phpMyAdmin akan terbuka. Di sinilah semua query SQL akan dijalankan.

### 3. Cara Menjalankan Query
1. Di phpMyAdmin, klik tab **SQL** di bagian atas.
2. Ketik atau *paste* query SQL pada area teks yang tersedia.
3. Klik tombol **Go** (atau tekan `Ctrl + Enter`) untuk menjalankan query.

---

## Studi Kasus: Sistem Katalog Produk Sederhana

Bayangkan kalian diminta membuat sebuah **halaman web katalog produk** sederhana (seperti toko online mini). Sebelum membangun tampilannya dengan HTML, CSS, dan PHP, kalian perlu menyiapkan **database** terlebih dahulu sebagai tempat penyimpanan datanya.

Database ini terdiri dari **3 tabel** yang saling berelasi:

| No | Nama Tabel   | Fungsi                              |
|----|--------------|-------------------------------------|
| 1  | `kategori`   | Menyimpan daftar kategori produk    |
| 2  | `produk`     | Menyimpan data produk               |
| 3  | `pelanggan`  | Menyimpan data pelanggan/pembeli    |

**Relasi antar tabel:**
- Satu `kategori` bisa memiliki banyak `produk` → Relasi **One-to-Many (1:N)**
- Kolom `id_kategori` pada tabel `produk` adalah **Foreign Key** yang merujuk ke tabel `kategori`.

---

## Soal Tugas

> **Instruksi:** Kerjakan setiap langkah di bawah ini secara berurutan. Jalankan setiap query di phpMyAdmin, lalu **screenshot hasilnya** sebagai bukti pengerjaan.

---

### Langkah 1 — Membuat Database

[kondisi laragon / XAMPP sudah jalan dengan lancar]. Buka panel SQL pada phpmyadmin, lalu buat sebuah database baru bernama `toko_online_4 NIM Terakhir`.

```sql
CREATE DATABASE toko_online_4 NIM Terakhir;
```

Setelah berhasil, pilih/gunakan database tersebut:

```sql
USE toko_online_4 NIM Terakhir;
```

> 📸 **Screenshot:** Tampilkan hasil pembuatan database pada phpMyAdmin.

---

### Langkah 2 — Membuat Tabel `kategori`

Buat tabel `kategori` dengan struktur berikut:

| Kolom         | Tipe Data    | Keterangan                     |
|---------------|-------------|--------------------------------|
| id_kategori   | INT          | Primary Key, Auto Increment    |
| nama_kategori | VARCHAR(100) | Nama kategori, tidak boleh kosong |

```sql
CREATE TABLE kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(100) NOT NULL
);
```

> 📸 **Screenshot:** Tampilkan struktur tabel `kategori` yang telah dibuat.

---

### Langkah 3 — Membuat Tabel `produk`

Buat tabel `produk` dengan struktur berikut:

| Kolom        | Tipe Data     | Keterangan                                  |
|--------------|--------------|----------------------------------------------|
| id_produk    | INT           | Primary Key, Auto Increment                 |
| nama_produk  | VARCHAR(150)  | Nama produk, tidak boleh kosong             |
| harga        | INT           | Harga produk dalam rupiah                   |
| stok         | INT           | Jumlah stok tersedia (default: 0)           |
| deskripsi    | TEXT          | Deskripsi/detail produk                     |
| id_kategori  | INT           | Foreign Key → merujuk ke tabel `kategori`   |
| tersedia     | BOOLEAN       | Status ketersediaan (1 = Ya, 0 = Tidak)     |
| dibuat_pada  | TIMESTAMP     | Waktu data ditambahkan (otomatis)           |

```sql
CREATE TABLE produk (
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(150) NOT NULL,
    harga INT NOT NULL,
    stok INT DEFAULT 0,
    deskripsi TEXT,
    id_kategori INT,
    tersedia BOOLEAN DEFAULT 1,
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori)
);
```

> 📸 **Screenshot:** Tampilkan struktur tabel `produk` yang telah dibuat.

---

### Langkah 4 — Membuat Tabel `pelanggan`

Buat tabel `pelanggan` dengan struktur berikut:

| Kolom          | Tipe Data    | Keterangan                          |
|----------------|-------------|--------------------------------------|
| id_pelanggan   | INT          | Primary Key, Auto Increment         |
| nama           | VARCHAR(100) | Nama lengkap pelanggan              |
| email          | VARCHAR(100) | Email pelanggan (unik, tidak boleh sama) |
| no_telp        | VARCHAR(20)  | Nomor telepon                       |
| tanggal_daftar | DATE         | Tanggal pelanggan mendaftar         |

```sql
CREATE TABLE pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    no_telp VARCHAR(20),
    tanggal_daftar DATE
);
```

> 📸 **Screenshot:** Tampilkan struktur tabel `pelanggan` yang telah dibuat.

---

### Langkah 5 — Memasukkan Data (INSERT)

#### 5a. Masukkan data ke tabel `kategori`

```sql
INSERT INTO kategori (nama_kategori) VALUES
('Elektronik'),
('Pakaian'),
('Makanan & Minuman');
```

#### 5b. Masukkan data ke tabel `produk`

```sql
INSERT INTO produk (nama_produk, harga, stok, deskripsi, id_kategori, tersedia) VALUES
('Earphone Bluetooth', 150000, 25, 'Earphone wireless dengan bass yang mantap', 1, 1),
('Kaos Polos Hitam', 75000, 50, 'Kaos cotton combed 30s ukuran M-XL', 2, 1),
('Kopi Arabika 250g', 45000, 100, 'Kopi arabika asli Toraja', 3, 1),
('Charger Fast Charging', 85000, 0, 'Charger 20W USB-C', 1, 0),
('Celana Jeans Slim Fit', 200000, 30, 'Celana jeans pria slim fit biru navy', 2, 1);
```

#### 5c. Masukkan data ke tabel `pelanggan`

```sql
INSERT INTO pelanggan (nama, email, no_telp, tanggal_daftar) VALUES
('Andi Pratama', 'andi@email.com', '081234567890', '2025-01-15'),
('Siti Nurhaliza', 'siti@email.com', '082345678901', '2025-02-20'),
('Budi Santoso', 'budi@email.com', '083456789012', '2025-03-10');
```

> 📸 **Screenshot:** Tampilkan isi masing-masing tabel setelah data berhasil dimasukkan (gunakan `SELECT * FROM nama_tabel`).

---

### Langkah 6 — Menampilkan Data (SELECT)

Jalankan query berikut satu per satu, lalu screenshot hasilnya:

#### 6a. Tampilkan semua produk beserta nama kategorinya

```sql
SELECT produk.nama_produk, produk.harga, produk.stok, kategori.nama_kategori
FROM produk
JOIN kategori ON produk.id_kategori = kategori.id_kategori;
```

#### 6b. Tampilkan hanya produk yang tersedia (stok > 0)

```sql
SELECT nama_produk, harga, stok
FROM produk
WHERE tersedia = 1 AND stok > 0;
```

> 📸 **Screenshot:** Tampilkan hasil dari kedua query SELECT di atas.

---

### Langkah 7 — Mengubah Data (UPDATE)

Ubah harga produk "Earphone Bluetooth" menjadi **120000** dan update stoknya menjadi **20**:

```sql
UPDATE produk
SET harga = 120000, stok = 20
WHERE nama_produk = 'Earphone Bluetooth';
```

> 📸 **Screenshot:** Tampilkan data tabel `produk` setelah di-update untuk membuktikan perubahannya.

---

### Langkah 8 — Menghapus Data (DELETE)

Hapus pelanggan bernama "Budi Santoso" dari tabel `pelanggan`:

```sql
DELETE FROM pelanggan
WHERE nama = 'Budi Santoso';
```

> 📸 **Screenshot:** Tampilkan isi tabel `pelanggan` setelah data dihapus.

---

## Ketentuan Pengumpulan

1. Kerjakan semua langkah (Langkah 1 - 8) secara berurutan.
2. Setiap langkah harus disertai **screenshot** hasil eksekusi query di phpMyAdmin.
3. Kumpulkan screenshot dalam **Lembar Jawaban yang disediakan** ([TP 6 Web-Desain - 4 NIM Terakhir.docx](https://docs.google.com/document/d/1zWVAfPv_rbSZ48kS-I6sNfrFTsWMeymuP_maKU-e2Ls/edit?usp=sharing)).
4. **Jangan hapus database `toko_online_4 NIM Terakhir`** setelah selesai mengerjakan. Database ini akan digunakan pada saat **praktikum di hari H** untuk ditampilkan ke halaman web menggunakan PHP dan HTML.

---

## Ringkasan Konsep yang Dipraktikkan

| Konsep              | Query yang Digunakan                        |
|---------------------|---------------------------------------------|
| Membuat Database    | `CREATE DATABASE`                           |
| Membuat Tabel       | `CREATE TABLE`                              |
| Primary Key         | `INT AUTO_INCREMENT PRIMARY KEY`            |
| Foreign Key         | `FOREIGN KEY ... REFERENCES ...`            |
| Relasi Antar Tabel  | `JOIN ... ON ...`                           |
| Tipe Data           | `INT`, `VARCHAR`, `TEXT`, `BOOLEAN`, `DATE`, `TIMESTAMP` |
| Insert Data         | `INSERT INTO ... VALUES ...`                |
| Select Data         | `SELECT ... FROM ... WHERE ...`             |
| Update Data         | `UPDATE ... SET ... WHERE ...`              |
| Delete Data         | `DELETE FROM ... WHERE ...`                 |

---

*Selamat mengerjakan!*
