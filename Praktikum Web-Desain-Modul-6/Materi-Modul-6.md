# MODUL 6: DATABASE

## 5.1 Tujuan Praktikum  
Setelah mengikuti praktikum ini, praktikan diharapkan dapat:  
1. Memahami konsep dasar database.  
2. Mengenal SQL, MySQL, CRUD, dan Basis Data NoSQL.  
3. Mengoperasikan phpMyAdmin untuk membuat dan mengelola database.  
4. Melakukan operasi CRUD (Create, Read, Update, Delete) sederhana.  

## 5.2 Alat & Bahan  
1. Laptop  
2. Software Visual Studio Code  
<<<<<<< Updated upstream
3. Software XAMPP / Laragon
=======
3. Software XAMPP  / Laragon
>>>>>>> Stashed changes

## 5.3 Dasar Teori  

### 5.3.1 Database  
*Database* atau basis data adalah sebuah sistem yang dirancang untuk mengelola dan menyimpan data secara terstruktur, sehingga data dapat diakses dengan mudah. Contohnya pada saat menyimpan nomor kontak di ponsel, sistem akan menyimpan data dalam format yang dapat diakses, dikelola, dan diperbarui dengan mudah. Beberapa contoh perangkat lunak basis data yang populer antara lain MySQL, Oracle Database, dan MongoDB.  

### 5.3.2 SQL
*Structured Query Language (SQL)* adalah bahasa pemrograman untuk menyimpan dan memproses informasi dalam basis data relasional. Dengan menggunakan SQL, pengguna dapat melakukan berbagai operasi seperti menampilkan, menambah, mengubah, dan menghapus data, serta mengelola struktur database itu sendiri. Basis data relasional ini menyimpan data dalam bentuk tabel, yang terdiri dari baris dan kolom yang mewakili atribut data yang berbeda, serta hubungan antara nilai-nilai data tersebut.  

## 5.3.3 MySQL  
MySQL adalah sistem manajemen basis data relasional (*Relational Database Management System/RDBMS*) yang bersifat *open-source* dan menggunakan bahasa SQL (*Structured Query Language*) untuk mengelola data. MySQL dirancang untuk menyimpan, mengatur, dan mengambil data secara efisien dalam bentuk tabel yang saling terhubung.  

## 5.4 Perbedaan SQL dan MySQL  
| Aspek          | SQL                              | MySQL                                      |  
|----------------|----------------------------------|--------------------------------------------|  
| Tipe           | Bahasa pemrograman               | Sistem manajemen database relasional (DBMS)|  
| Fungsi         | Mengelola database relasional    | Menyimpan, mengorganisasi, dan memanipulasi data |  
| Penggunaan     | Digunakan untuk membuat query    | Sebagai software yang menjalankan query SQL |  
| Universalitas  | Bisa digunakan di berbagai DBMS  | DBMS spesifik                              |  

## 5.5 CRUD  
CRUD adalah singkatan dari **Create, Read, Update, dan Delete**, yang merupakan operasi dasar yang sering digunakan dalam aplikasi pengolahan data.  

- **Create (Membuat)**:  
  Sintaks dasar: `INSERT INTO`.  
  Contoh: Saat mendaftar di situs web, data disimpan ke basis data.  

- **Read (Membaca)**:  
  Sintaks dasar: `SELECT FROM`.  
  Contoh: Menampilkan data dalam aplikasi web menggunakan PHP.  

- **Update (Memperbarui)**:  
  Sintaks dasar: `UPDATE namatabel SET ... WHERE ...`.  
  Contoh: Mengedit data melalui aplikasi web.  

- **Delete (Menghapus)**:  
  Sintaks dasar: `DELETE FROM namatabel WHERE ...`.  
  Contoh: Menghapus data melalui aplikasi web.  

## 5.6 Query  
*Query* adalah perintah atau instruksi yang digunakan untuk mengambil, menambahkan, mengubah, atau menghapus data di dalam sebuah basis data. Query ditulis menggunakan bahasa SQL dan dijalankan pada sistem manajemen basis data seperti MySQL, PostgreSQL, atau Oracle.  

### 5.6.1 Jenis-jenis Query pada Database SQL  
1. **DDL (Data Definition Language)**:  
   - `CREATE`: Membuat database dan tabel.  
   - `DROP`: Menghapus tabel dan database.  
   - `ALTER`: Mengubah struktur tabel (menambah, mengganti, atau menghapus kolom).  

2. **DML (Data Manipulation Language)**:  
   - `INSERT`: Memasukkan data ke tabel.  
   - `UPDATE`: Mengubah data dalam tabel.  
   - `DELETE`: Menghapus data dari tabel.  

3. **DCL (Data Control Language)**:  
   - `GRANT`: Memberikan hak akses ke user.  
   - `REVOKE`: Mencabut hak akses.  
   - `COMMIT`: Menyimpan perubahan permanen.  
   - `ROLLBACK`: Membatalkan perubahan.  

## 5.7 Tipe Data yang Paling Sering Digunakan

Dalam pengembangan web, kita tidak perlu menghafal semua tipe data MySQL yang sangat kompleks. Berikut adalah tipe data yang **paling sering** dipakai dalam pembuatan tabel:

### 1. Tipe Data Teks (String)
Di database MySQL, tipe data untuk huruf/teks biasa disebut sebagai `VARCHAR` atau `TEXT` (bukan bernama *String* secara harfiah).
*   **`VARCHAR`**: Digunakan untuk teks pendek yang ada batas maksimal panjangnya (misal: nama, email, password, username). Contoh penulisan: `VARCHAR(255)`.
*   **`TEXT`**: Digunakan untuk teks yang sangat panjang tanpa batasan kaku (misal: deskripsi produk, artikel blog, komentar panjang).

### 2. Tipe Data Angka (Numerik)
*   **`INT`** (Integer): Untuk bilangan bulat (misal: ID pengguna, umur, jumlah stok barang, harga yang bulat).
*   **`FLOAT` / `DOUBLE`**: Untuk bilangan desimal atau pecahan (misal: nilai IPK `3.75`, berat badan `65.5`). *Double* dapat menampung angka desimal yang lebih besar/presisi dari *Float*.

### 3. Tipe Data Waktu (Date/Time)
*   **`DATE`**: Menyimpan tanggal saja (Format: `YYYY-MM-DD`). Contoh: Tanggal lahir.
*   **`TIMESTAMP` / `DATETIME`**: Menyimpan tanggal beserta waktu spesifik (Format: `YYYY-MM-DD HH:MM:SS`). Contoh: Waktu pengguna melakukan registrasi atau transaksi.

### 4. Tipe Data Boolean (Benar/Salah)
*   **`BOOLEAN` / `TINYINT(1)`**: MySQL sebenarnya menyimpan Boolean (True/False) sebagai angka `TINYINT(1)`. Nilai `1` berarti *True*/Ya, dan `0` berarti *False*/Tidak. Contoh penggunaannya: Status apakah sebuah akun pengguna sudah aktif (`1`) atau diblokir (`0`).

## 5.8 Konsep Kunci (Keys) dan Relasi Antar Tabel

Karena MySQL adalah database relasional (RDBMS), data tidak disimpan tumpah ruah dalam satu tabel raksasa, melainkan dipecah ke dalam beberapa tabel yang saling berhubungan (berelasi). Untuk menghubungkannya, kita menggunakan *Keys*.

1.  **Primary Key (Kunci Utama):** 
    Ini adalah identitas unik untuk setiap baris data di dalam sebuah tabel. Nilai *Primary Key* tidak boleh kosong (*NOT NULL*) dan tidak boleh ada yang sama (duplikat). 
    *Contoh:* Kolom `id_user` atau `NIM`. Sama seperti KTP di dunia nyata, tidak ada 2 orang yang punya nomor KTP persis sama.
2.  **Foreign Key (Kunci Tamu):**
    Ini adalah kolom pada sebuah tabel yang "merujuk" pada *Primary Key* di tabel lain. Fungsinya adalah untuk menciptakan **Relasi** (hubungan) antar tabel.
    *Contoh:* Di tabel `Peminjaman_Buku`, ada kolom `id_user`. Kolom `id_user` ini adalah *Foreign Key* yang merujuk ke tabel `User`. Dengan begitu, sistem tahu persis siapa pengguna yang meminjam buku tersebut.

**Jenis-Jenis Relasi Antar Tabel:**
*   **One-to-One (1:1):** Satu data di Tabel A hanya punya satu relasi di Tabel B. (Contoh: Tabel `User` dengan tabel `Detail_KTP`).
*   **One-to-Many (1:N):** Satu data di Tabel A berhubungan dengan banyak data di Tabel B. (Contoh: Satu `User` bisa melakukan banyak `Transaksi`). Ini adalah jenis relasi yang paling sering dipakai.
*   **Many-to-Many (M:N):** Banyak data di Tabel A berhubungan dengan banyak data di Tabel B. Biasanya butuh tabel ketiga sebagai perantara. (Contoh: Banyak `Mahasiswa` mengambil banyak `Mata Kuliah`).

## 5.9 Basis Data NoSQL  
Basis data NoSQL adalah jenis sistem manajemen basis data yang tidak menggunakan model relasional seperti SQL, melainkan model penyimpanan data fleksibel (dokumen, *key-value*, grafik, atau kolom lebar). Cocok untuk data skala besar, tidak terstruktur, atau semi-terstruktur.  

### 5.9.1 Keunggulan NoSQL  
1. **Fleksibilitas**: Tidak memerlukan struktur tabel kaku.  
2. **Skalabilitas**: Mudah diperluas dengan menambah server.  
3. **Performa Tinggi**: Proses baca/tulis cepat untuk aplikasi *real-time*.  
4. **Fungsionalitas Luas**: Struktur data menyesuaikan perubahan aplikasi.  

### 5.9.2 Perbedaan SQL dan NoSQL  

![Perbedaan SQL dan NoSQL](/Materi-modul/img/perbedaan-sql-dan-nosql.png)

| Fitur           | SQL                          | NoSQL                          |  
|-----------------|------------------------------|--------------------------------|  
| Struktur Data   | Skema terdefinisi            | Skema fleksibel                |  
| Konsistensi     | ACID                         | Konsistensi beragam            |  
| Skalabilitas    | Vertikal (menambah resource) | Horizontal (menambah server)   |  
| Bahasa Kueri    | SQL                          | API atau bahasa khusus         |  
| Cocok untuk     | - Aplikasi bisnis tradisional <br> - Sistem keuangan <br> - Query data kompleks | - Aplikasi web skala besar <br> - Data tidak terstruktur <br> - Fleksibilitas struktur data |  

## 5.10 Integrasi Dasar PHP & MySQL (Pengenalan)

Untuk menampilkan atau mengubah data database melalui halaman web, kita menggunakan PHP dengan ekstensi **MySQLi**. Berikut adalah contoh dasar cara menghubungkan PHP ke MySQL menggunakan XAMPP:

```php
<?php
$host = "localhost";
$user = "root";       // Username bawaan XAMPP
$pass = "";           // Password bawaan XAMPP (kosong)
$db   = "nama_database";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil!";
?>
```
> **Keamanan Dasar:** Saat menyimpan data dari form HTML ke database, selalu waspada terhadap celah keamanan **SQL Injection**. Selalu filter input pengguna (misalnya dengan `mysqli_real_escape_string`) atau gunakan fitur *Prepared Statements* sebelum menjalankan query.

---

## LANGKAH PRAKTIKUM  

### Membuat Database  
```sql
CREATE DATABASE nama_database;
```

### Membuat Tabel
```sql
CREATE TABLE nama_tabel ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
```

*Catatan:*
- `PRIMARY KEY`: Kunci utama untuk memastikan setiap baris data memiliki identitas yang unik (biasanya pada kolom `id`).
- `AUTO_INCREMENT`: Membuat nilai angka otomatis bertambah (1, 2, 3...) setiap ada data baru yang ditambahkan.

### Insert Data
```sql
INSERT INTO nama_tabel (column1, column2, column3,...) VALUES (value1, value2, value3,...)
```

### Select Data
```sql
SELECT * FROM nama_tabel
```

### Update Data
```sql
UPDATE nama_tabel SET column1=value, column2=value2,... WHERE some_column=some_value
```

### Delete Data
```sql
DELETE FROM nama_tabel
WHERE some_column = some_value
```

## Credits
- Pengembang modul: [Nabil Fikry Khaidar](https://github.com/Nabilfikry)
