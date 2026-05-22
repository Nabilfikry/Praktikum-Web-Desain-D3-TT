# SOAL PRAKTIK — UJIAN KOMPREHENSIF 2
## Praktikum Web Desain — D3 Teknik Telekomunikasi

**Cakupan Materi:** Modul 5 (PHP), Modul 6 (Database), Modul 7 (Bootstrap & Visualisasi Data)  
**Jumlah Soal:** 15 nomor (melengkapi kode yang kosong)  
**Tingkat:** Mudah  
**Waktu:** 60 menit

---

## Deskripsi Proyek

Anda akan melengkapi sebuah proyek website **Dashboard Data Mahasiswa** yang menampilkan data dari database MySQL ke dalam **tabel Bootstrap** dan **grafik Chart.js**.

Proyek terdiri dari **5 file**:

| No | Nama File | Bahasa | Fungsi | Jumlah Soal |
|----|-----------|--------|--------|-------------|
| 1 | `database.sql` | SQL | Membuat database dan mengisi data | 5 soal |
| 2 | `koneksi.php` | PHP | Menghubungkan PHP ke database MySQL | 2 soal |
| 3 | `index.php` | PHP + HTML | Halaman utama (tabel + grafik) | 6 soal |
| 4 | `style.css` | CSS | Styling tambahan (sudah lengkap) | 0 soal |
| 5 | `script.js` | JavaScript | Membuat grafik Chart.js | 2 soal |

---

## Panduan Pengerjaan (Step-by-Step)

### Langkah 1 — Persiapan Lingkungan

1. **Jalankan XAMPP / Laragon**
   - Buka XAMPP Control Panel atau Laragon
   - Klik **Start** pada **Apache** dan **MySQL**
   - Pastikan kedua modul berstatus **Running** (hijau)

2. **Salin folder proyek**
   - Salin seluruh folder `proyek-ujikom` ke dalam `C:\xampp\htdocs\` (atau folder `www` Laragon)
   - Rename folder menjadi **`ujikom2`**
   - Hasil akhir: `C:\xampp\htdocs\ujikom2\`

### Langkah 2 — Mengerjakan Database (database.sql)

1. Buka browser, akses **http://localhost/phpmyadmin**
2. Klik tab **SQL** di bagian atas
3. Buka file `database.sql` menggunakan VS Code / Notepad
4. **Lengkapi Soal 1–5** pada file tersebut
5. Ganti **XXXX** dengan **4 NIM terakhir** Anda
6. Copy-paste seluruh isi file ke phpMyAdmin, lalu klik **Go**
7. Pastikan database dan tabel berhasil dibuat (cek di sidebar kiri)

### Langkah 3 — Mengerjakan Koneksi PHP (koneksi.php)

1. Buka file `koneksi.php` menggunakan VS Code
2. **Lengkapi Soal 6–7** pada file tersebut
3. Ganti **XXXX** pada nama database dengan 4 NIM terakhir Anda
4. Simpan file (Ctrl + S)

### Langkah 4 — Mengerjakan Halaman Utama (index.php)

1. Buka file `index.php` menggunakan VS Code
2. **Lengkapi Soal 8–13 dan Soal 15** pada file tersebut
3. **PENTING:** Ganti **NAMA LENGKAP** dan **NIM ANDA** di bagian identitas mahasiswa dengan data diri Anda yang sebenarnya
4. Simpan file (Ctrl + S)

### Langkah 5 — Mengerjakan Grafik (script.js)

1. Buka file `script.js` menggunakan VS Code
2. **Lengkapi Soal 14** pada file tersebut
3. Simpan file (Ctrl + S)

### Langkah 6 — Menjalankan dan Screenshot

1. Buka browser
2. Akses **http://localhost/ujikom2/index.php**
3. Pastikan tampil:
   - ✅ Nama dan NIM Anda di bagian atas halaman
   - ✅ Tabel data mahasiswa dengan styling Bootstrap
   - ✅ Grafik bar chart jumlah mahasiswa per jurusan
4. **Screenshot full screen** (termasuk taskbar dengan tanggal/waktu)
5. Kumpulkan screenshot sebagai bukti pengerjaan

---

## Struktur Folder Proyek

```
C:\xampp\htdocs\ujikom2\
    ├── database.sql    ← Soal 1-5 (dijalankan di phpMyAdmin)
    ├── koneksi.php     ← Soal 6-7
    ├── index.php       ← Soal 8-13 & 15
    ├── style.css       ← Sudah lengkap (tidak ada soal)
    └── script.js       ← Soal 14
```

---

## Daftar Soal

### File: `database.sql`

| Soal | Instruksi | Konsep yang Diuji |
|------|-----------|-------------------|
| 1 | Lengkapi keyword SQL untuk membuat database baru | `CREATE DATABASE` (Modul 6) |
| 2 | Lengkapi atribut agar id bertambah otomatis | `AUTO_INCREMENT` (Modul 6) |
| 3 | Lengkapi constraint agar kolom tidak boleh kosong | `NOT NULL` (Modul 6) |
| 4 | Lengkapi keyword SQL untuk memasukkan data | `INSERT INTO` (Modul 6) |
| 5 | Lengkapi tanda untuk menampilkan semua kolom | `SELECT *` (Modul 6) |

### File: `koneksi.php`

| Soal | Instruksi | Konsep yang Diuji |
|------|-----------|-------------------|
| 6 | Lengkapi nilai host dan user default | `localhost` dan `root` (Modul 5 & 6) |
| 7 | Lengkapi fungsi koneksi PHP ke MySQL | `mysqli_connect` (Modul 5 & 7) |

### File: `index.php`

| Soal | Instruksi | Konsep yang Diuji |
|------|-----------|-------------------|
| 8 | Lengkapi cara memanggil file PHP lain | `require_once` (Modul 5) |
| 9 | Lengkapi fungsi untuk menjalankan query SQL | `mysqli_query` (Modul 7) |
| 10 | Lengkapi fungsi untuk mengambil semua baris data | `mysqli_fetch_all` (Modul 7) |
| 11 | Lengkapi class Bootstrap untuk container | `container` (Modul 7) |
| 12 | Lengkapi class Bootstrap untuk card dengan bayangan | `card shadow` (Modul 7) |
| 13 | Lengkapi jenis perulangan PHP untuk array | `foreach` (Modul 5) |
| 15 | Lengkapi fungsi PHP→JS (mengubah array ke JSON) | `json_encode` (Modul 7) |

### File: `script.js`

| Soal | Instruksi | Konsep yang Diuji |
|------|-----------|-------------------|
| 14 | Lengkapi jenis grafik batang | `bar` (Modul 7) |

---

## Ketentuan Pengumpulan

1. Kerjakan semua soal (Soal 1–15) pada file yang sesuai
2. Pastikan **Nama** dan **NIM** Anda tampil di halaman website
3. Screenshot **full screen** halaman website yang berhasil berjalan
4. Screenshot harus menampilkan **taskbar** (bagian bawah termasuk tanggal dan waktu)
5. Kumpulkan file dalam bentuk **PDF** ke GCR yang disediakan Asprak

---

## KUNCI JAWABAN

> ⚠️ **RAHASIA — Untuk Asisten Praktikum saja! Jangan disebarkan ke mahasiswa!**

| Soal | Jawaban | File |
|------|---------|------|
| 1 | `DATABASE` | database.sql |
| 2 | `AUTO_INCREMENT` | database.sql |
| 3 | `NOT NULL` | database.sql |
| 4 | `INSERT` | database.sql |
| 5 | `*` | database.sql |
| 6 | `localhost` dan `root` | koneksi.php |
| 7 | `mysqli_connect` | koneksi.php |
| 8 | `require_once` | index.php |
| 9 | `mysqli_query` | index.php |
| 10 | `mysqli_fetch_all` | index.php |
| 11 | `container` | index.php |
| 12 | `card` dan `shadow` | index.php |
| 13 | `foreach` | index.php |
| 14 | `bar` | script.js |
| 15 | `json_encode` (×2) | index.php |

### Kode Lengkap — Versi Jawaban

Berikut kode yang sudah dilengkapi untuk referensi pengecekan oleh Asprak.

---

#### ✅ `database.sql` (Jawaban)

```sql
CREATE DATABASE ujikom_mahasiswa_XXXX;
USE ujikom_mahasiswa_XXXX;

CREATE TABLE jurusan (
    id_jurusan INT AUTO_INCREMENT PRIMARY KEY,
    nama_jurusan VARCHAR(100) NOT NULL
);

CREATE TABLE mahasiswa (
    id_mhs INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    id_jurusan INT,
    ipk FLOAT,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id_jurusan)
);

INSERT INTO jurusan (nama_jurusan) VALUES
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

SELECT * FROM mahasiswa;
```

---

#### ✅ `koneksi.php` (Jawaban)

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ujikom_mahasiswa_XXXX";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
```

---

#### ✅ `index.php` (Jawaban)

```php
<?php
require_once 'koneksi.php';

$sql = "SELECT mahasiswa.nama, mahasiswa.nim, mahasiswa.ipk,
        jurusan.nama_jurusan
        FROM mahasiswa
        JOIN jurusan ON mahasiswa.id_jurusan = jurusan.id_jurusan";

$result = mysqli_query($koneksi, $sql);
$data   = mysqli_fetch_all($result);

$sql_grafik = "SELECT jurusan.nama_jurusan, COUNT(mahasiswa.id_mhs) AS jumlah
               FROM jurusan
               LEFT JOIN mahasiswa ON jurusan.id_jurusan = mahasiswa.id_jurusan
               GROUP BY jurusan.id_jurusan, jurusan.nama_jurusan";

$result_grafik = mysqli_query($koneksi, $sql_grafik);
$all_grafik    = mysqli_fetch_all($result_grafik);

$labels = array_column($all_grafik, 0);
$values = array_column($all_grafik, 1);
$colors = ['#4361ee', '#f72585', '#4cc9f0'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa - Ujikom 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-1 dashboard-title">🎓 Dashboard Data Mahasiswa</h2>
    <p class="text-center identitas mb-1">Nama: <span>NAMA LENGKAP</span></p>
    <p class="text-center identitas mb-5">NIM: <span>NIM ANDA</span></p>

    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title mb-3">📋 Data Mahasiswa</h5>
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>IPK</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $row) {
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                echo '<td>' . htmlspecialchars($row[0]) . '</td>';
                                echo '<td>' . htmlspecialchars($row[1]) . '</td>';
                                echo '<td>' . $row[2] . '</td>';
                                echo '<td>' . htmlspecialchars($row[3]) . '</td>';
                                echo '</tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">📊 Jumlah Mahasiswa per Jurusan</h5>
                    <canvas id="chartMahasiswa"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const chartLabels = <?= json_encode($labels) ?>;
    const chartValues = <?= json_encode($values) ?>;
    const chartColors = <?= json_encode($colors) ?>;
</script>
<script src="script.js"></script>

</body>
</html>
```

---

#### ✅ `script.js` (Jawaban)

```javascript
new Chart(document.getElementById('chartMahasiswa'), {
    type: 'bar',
    data: {
        labels: chartLabels,
        datasets: [{
            label: 'Jumlah Mahasiswa',
            data: chartValues,
            backgroundColor: chartColors,
            borderColor: chartColors,
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                title: { display: true, text: 'Jumlah' }
            },
            x: {
                title: { display: true, text: 'Jurusan' }
            }
        },
        plugins: {
            legend: { display: false }
        }
    }
});
```

---

## Rubrik Penilaian

| Komponen | Bobot |
|----------|-------|
| Soal 1–5 (Database SQL) | **35%** |
| Soal 6–7 (Koneksi PHP) | **15%** |
| Soal 8–13, 15 (Halaman Utama) | **40%** |
| Soal 14 (Grafik Chart.js) | **5%** |
| Nama & NIM tampil di website | **5%** |

**Total: 100%**

---

## Credits
- Pengembang soal: [Nabil Fikry Khaidar](https://github.com/Nabilfikry)
