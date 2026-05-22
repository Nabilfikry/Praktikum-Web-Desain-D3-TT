# SOAL TEORI UJIAN KOMPREHENSIF 2
## Praktikum Web Desain D3 Teknologi Telekomunikasi

**Cakupan Materi:** Modul 5 (PHP), Modul 6 (Database), Modul 7 (Bootstrap & Visualisasi Data)  
**Jumlah Soal:** 20 soal pilihan ganda  
**Waktu:** 30 menit

---

> **Petunjuk:** Pilihlah **satu jawaban** yang paling tepat untuk setiap soal berikut.

---

### Soal 1
Apa kepanjangan dari **CRUD** yang merupakan operasi dasar dalam pengolahan data?

- A. Copy, Read, Update, Delete
- B. Create, Read, Update, Delete
- C. Create, Run, Upload, Download
- D. Copy, Run, Update, Download

---

### Soal 2
Dalam XAMPP, dua modul yang harus berstatus **Running** agar PHP dan database bisa berjalan adalah...

- A. Apache dan FileZilla
- B. Apache dan MySQL
- C. MySQL dan Tomcat
- D. Mercury dan Apache

---

### Soal 3
Apa itu **Database**?

- A. Bahasa pemrograman untuk membuat website
- B. Software untuk mengedit kode
- C. Sistem yang dirancang untuk menyimpan dan mengelola data secara terstruktur
- D. Aplikasi untuk mendesain tampilan website

---

### Soal 4
**SQL** adalah singkatan dari...

- A. System Query Language
- B. Structured Query Language
- C. Simple Question Language
- D. Standard Query List

---

### Soal 5
Apa perbedaan utama antara **SQL** dan **MySQL**?

- A. SQL adalah database, MySQL adalah bahasa pemrograman
- B. SQL adalah bahasa untuk mengelola database, MySQL adalah software/sistem manajemen database (DBMS)
- C. SQL dan MySQL adalah hal yang sama
- D. SQL hanya bisa digunakan di MySQL

---

### Soal 6
Perhatikan tipe data MySQL berikut:

| Tipe Data | Contoh Penggunaan |
|-----------|------------------|
| `VARCHAR` | ??? |
| `INT` | ID pengguna, umur |
| `TEXT` | Deskripsi produk |

Contoh penggunaan yang tepat untuk `VARCHAR` adalah...

- A. Menyimpan file gambar
- B. Menyimpan nama, email, atau username
- C. Menyimpan angka desimal
- D. Menyimpan tanggal lahir

---

### Soal 7
Tipe data yang tepat untuk menyimpan **nilai IPK** (contoh: 3.75) di MySQL adalah...

- A. `VARCHAR`
- B. `INT`
- C. `FLOAT`
- D. `BOOLEAN`

---

### Soal 8
Apa fungsi dari **Primary Key** dalam sebuah tabel database?

- A. Menyimpan password pengguna
- B. Menghubungkan dua tabel yang berbeda
- C. Menjadi identitas unik untuk setiap baris data agar tidak ada yang sama
- D. Menghitung jumlah data dalam tabel

---

### Soal 9
**Foreign Key** berfungsi untuk...

- A. Mengunci tabel agar tidak bisa diedit
- B. Membuat relasi (hubungan) antara satu tabel dengan tabel lain
- C. Menghapus data secara otomatis
- D. Mengenkripsi data dalam tabel

---

### Soal 10
Relasi **One-to-Many (1:N)** artinya adalah...

- A. Satu data di Tabel A hanya punya satu data di Tabel B
- B. Satu data di Tabel A berhubungan dengan banyak data di Tabel B
- C. Banyak data di Tabel A berhubungan dengan banyak data di Tabel B
- D. Tidak ada hubungan antara Tabel A dan Tabel B

---

### Soal 11
Perhatikan jenis-jenis query SQL berikut:

- **DDL:** `CREATE`, `DROP`, `ALTER`
- **DML:** `INSERT`, `UPDATE`, `DELETE`

Query `INSERT INTO` termasuk kelompok...

- A. DDL (Data Definition Language)
- B. DML (Data Manipulation Language)
- C. DCL (Data Control Language)
- D. DQL (Data Query Language)

---

### Soal 12
Perhatikan query SQL berikut:

```sql
SELECT * FROM produk;
```

Apa arti dari tanda bintang (`*`) pada query tersebut?

- A. Menghapus semua data
- B. Menampilkan semua kolom dari tabel
- C. Menambah data baru ke tabel
- D. Menghitung jumlah baris

---

### Soal 13
Agar PHP dapat terhubung ke database MySQL, fungsi yang digunakan adalah...

```php
$koneksi = ???("localhost", "root", "", "nama_database");
```

- A. `mysql_open()`
- B. `database_connect()`
- C. `mysqli_connect()`
- D. `php_connect()`

---

### Soal 14
Pada XAMPP, username dan password **default** untuk mengakses MySQL adalah...

- A. Username: `admin`, Password: `admin`
- B. Username: `root`, Password: (kosong)
- C. Username: `user`, Password: `1234`
- D. Username: `mysql`, Password: `mysql`

---

### Soal 15
Apa itu **Bootstrap**?

- A. Bahasa pemrograman untuk membuat database
- B. Framework CSS yang menyediakan komponen siap pakai untuk mempercantik tampilan website
- C. Software untuk menjalankan server web
- D. Library JavaScript untuk membuat grafik

---

### Soal 16
Di Bootstrap, sistem grid membagi lebar halaman menjadi **berapa kolom**?

- A. 6 kolom
- B. 10 kolom
- C. 12 kolom
- D. 16 kolom

---

### Soal 17
Perhatikan class Bootstrap berikut:

```html
<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title">Judul</h5>
    </div>
</div>
```

Komponen Bootstrap di atas bernama...

- A. Table
- B. Navbar
- C. Card
- D. Alert

---

### Soal 18
Apa fungsi dari **Chart.js** dalam pengembangan web?

- A. Mengelola database MySQL
- B. Membuat layout halaman web yang responsif
- C. Membuat grafik interaktif pada halaman web
- D. Menghubungkan PHP ke database

---

### Soal 19
Agar data dari PHP bisa dikirim ke JavaScript (misalnya untuk Chart.js), fungsi PHP yang digunakan adalah...

```php
const labels = <?= ???($labels) ?>;
```

- A. `html_encode()`
- B. `json_encode()`
- C. `js_convert()`
- D. `data_send()`

---

### Soal 20
Perhatikan alur kerja menampilkan grafik dari database pada Modul 7:

```
Database MySQL → PHP mengambil data → ??? → JavaScript (Chart.js) → Grafik di browser
```

Proses yang mengisi bagian `???` adalah...

- A. Data langsung ditampilkan sebagai tabel HTML
- B. Data diubah menjadi format JSON menggunakan `json_encode()`
- C. Data dikirim melalui email ke pengguna
- D. Data disimpan ke file teks

---
