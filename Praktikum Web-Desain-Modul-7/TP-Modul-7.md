# TUGAS PENDAHULUAN — MODUL 7: VISUALISASI DATA DATABASE DALAM BENTUK GRAFIK

## Tujuan Tugas
Membuat halaman web **PHP + Chart.js + Bootstrap** yang menampilkan data dari database `toko_online_XXXX` (yang sudah dibuat di Modul 6) dalam bentuk **grafik interaktif**. Tugas ini menjadi persiapan sebelum praktikum di hari H, di mana grafik akan dikembangkan lebih lanjut.

## Alat & Bahan
1. Laptop dengan **XAMPP / Laragon** terinstal
2. Browser modern (Chrome / Firefox / Edge)
3. Text editor (VS Code)
4. Database `toko_online_XXXX` dari **Tugas Pendahuluan Modul 6** (harus masih ada)

> ⚠️ **Penting:** Jika database `toko_online_XXXX` sudah terhapus, buat ulang terlebih dahulu menggunakan langkah-langkah di TP Modul 6.

---

## Panduan Persiapan

### 1. Menjalankan XAMPP / Laragon
1. Buka aplikasi **XAMPP / Laragon Control Panel**.
2. Klik **Start** pada modul **Apache** dan **MySQL** (khusus XAMPP).
3. Pastikan kedua modul berstatus hijau (Running).
4. Untuk Laragon, cukup jalankan **Start All**.
5. Jika XAMPP error, download dan install Laragon [disini](https://drive.google.com/drive/folders/1i5I1iR-fPjx1t5RbrRjh1JGmTO1cafmd?usp=sharing).

> 📸 **Screenshot 1:** Tampilkan XAMPP / Laragon dalam keadaan Running.

### 2. Pastikan Database Sudah Ada
1. Buka browser, akses `http://localhost/phpmyadmin`.
2. Di sidebar kiri, pastikan database `toko_online_XXXX` masih ada.
3. Klik database tersebut, pastikan tabel `produk` dan `kategori` masih berisi data.

> 📸 **Screenshot 2:** Tampilkan daftar tabel di database `toko_online_XXXX` pada phpMyAdmin.

### 3. Membuat Folder Project
1. Buka **File Explorer**.
2. Navigasi ke `C:\xampp\htdocs\` (atau folder www Laragon).
3. Buat folder baru bernama **`modul7`**.

---

## Studi Kasus: Dashboard Grafik Produk Toko Online

Kita akan membuat sebuah **halaman dashboard** sederhana yang menampilkan data produk dari database `toko_online_XXXX` dalam bentuk grafik interaktif. Halaman ini akan menampilkan **3 jenis grafik** dari data yang sudah ada:

| No | Jenis Grafik | Data yang Ditampilkan |
|----|--------------|-----------------------|
| 1 | **Pie Chart** | Perbandingan harga antar produk |
| 2 | **Bar Chart** | Perbandingan stok antar produk |
| 3 | **Doughnut Chart** | Jumlah produk per kategori |

**Teknologi yang digunakan:**
- **PHP** → Mengambil data dari database MySQL
- **Chart.js** → Membuat grafik interaktif (library JavaScript via CDN)
- **Bootstrap 5** → Mempercantik layout halaman (framework CSS via CDN)

---

## Soal Tugas

> **Instruksi:** Kerjakan setiap langkah di bawah ini secara berurutan. Jalankan setiap kode di browser, lalu **screenshot hasilnya** sebagai bukti pengerjaan.

---

### Langkah 1 — Menambahkan Data Penjualan ke Database

Sebelum membuat grafik, kita perlu menambahkan tabel baru untuk data penjualan. Buka **phpMyAdmin** → pilih database `toko_online_XXXX` → klik tab **SQL**, lalu jalankan query berikut:

#### 1a. Buat tabel `penjualan`

| Kolom | Tipe Data | Keterangan |
|-------|----------|-----------|
| id_penjualan | INT | Primary Key, Auto Increment |
| id_produk | INT | Foreign Key → merujuk ke tabel `produk` |
| jumlah_terjual | INT | Jumlah produk yang terjual |
| tanggal_jual | DATE | Tanggal penjualan |

```sql
CREATE TABLE penjualan (
    id_penjualan INT AUTO_INCREMENT PRIMARY KEY,
    id_produk INT NOT NULL,
    jumlah_terjual INT NOT NULL,
    tanggal_jual DATE NOT NULL,
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
);
```

#### 1b. Masukkan data penjualan

```sql
INSERT INTO penjualan (id_produk, jumlah_terjual, tanggal_jual) VALUES
(1, 10, '2025-04-01'),
(2, 25, '2025-04-01'),
(3, 40, '2025-04-02'),
(4, 5, '2025-04-02'),
(5, 15, '2025-04-03'),
(1, 8, '2025-04-05'),
(3, 20, '2025-04-07'),
(2, 12, '2025-04-10');
```

#### 1c. Verifikasi data — Tampilkan data penjualan beserta nama produknya

```sql
SELECT penjualan.id_penjualan, produk.nama_produk, penjualan.jumlah_terjual, penjualan.tanggal_jual
FROM penjualan
JOIN produk ON penjualan.id_produk = produk.id_produk;
```

> 📸 **Screenshot 3:** Tampilkan hasil query verifikasi (tabel penjualan dengan nama produk).

---

### Langkah 2 — Membuat File `index.php` (Grafik Pie Chart)

Buat file `index.php` di dalam folder `C:\xampp\htdocs\modul7\`, lalu ketik kode berikut:

```php
<?php
// ==================================================
// KONEKSI DATABASE
// ==================================================
// Ganti "toko_online_XXXX" dengan nama database kalian
$koneksi = mysqli_connect("localhost", "root", "", "toko_online_XXXX");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ==================================================
// QUERY 1: Data untuk Pie Chart (Harga Produk)
// ==================================================
$sql_harga  = "SELECT nama_produk, harga FROM produk";
$result_harga = mysqli_query($koneksi, $sql_harga);
$all_harga    = mysqli_fetch_all($result_harga);

$labels_harga = array_column($all_harga, 0);  // nama produk
$data_harga   = array_column($all_harga, 1);  // harga

// ==================================================
// QUERY 2: Data untuk Bar Chart (Stok Produk)
// ==================================================
$sql_stok  = "SELECT nama_produk, stok FROM produk";
$result_stok = mysqli_query($koneksi, $sql_stok);
$all_stok    = mysqli_fetch_all($result_stok);

$labels_stok = array_column($all_stok, 0);
$data_stok   = array_column($all_stok, 1);

// ==================================================
// QUERY 3: Data untuk Doughnut Chart (Jumlah Produk per Kategori)
// ==================================================
$sql_kategori = "SELECT kategori.nama_kategori, COUNT(produk.id_produk) AS jumlah
                 FROM kategori
                 LEFT JOIN produk ON kategori.id_kategori = produk.id_kategori
                 GROUP BY kategori.id_kategori, kategori.nama_kategori";
$result_kategori = mysqli_query($koneksi, $sql_kategori);
$all_kategori    = mysqli_fetch_all($result_kategori);

$labels_kategori = array_column($all_kategori, 0);
$data_kategori   = array_column($all_kategori, 1);

// Palet warna
$colors = ['#f94144', '#f3722c', '#f9844a', '#f9c74f', '#90be6d', '#43aa8b', '#577590', '#277da1'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Grafik Produk — Modul 7</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .dashboard-title {
            color: #fff;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        .card {
            border: none;
            border-radius: 15px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <!-- Judul Dashboard -->
    <h2 class="text-center mb-2 dashboard-title">📊 Dashboard Grafik Produk</h2>
    <p class="text-center text-white-50 mb-5">Data dari database toko_online — Modul 7</p>

    <div class="row g-4">

        <!-- ========== GRAFIK 1: PIE CHART ========== -->
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">🥧 Pie Chart — Harga Produk</h5>
                    <canvas id="chartPie"></canvas>
                </div>
            </div>
        </div>

        <!-- ========== GRAFIK 2: BAR CHART ========== -->
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">📊 Bar Chart — Stok Produk</h5>
                    <canvas id="chartBar"></canvas>
                </div>
            </div>
        </div>

        <!-- ========== GRAFIK 3: DOUGHNUT CHART ========== -->
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">🍩 Doughnut Chart — Produk per Kategori</h5>
                    <canvas id="chartDoughnut"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // ====================================
    // Data dari PHP → JavaScript
    // ====================================
    const bgColors = <?= json_encode($colors) ?>;

    // ====================================
    // GRAFIK 1: Pie Chart (Harga Produk)
    // ====================================
    new Chart(document.getElementById('chartPie'), {
        type: 'pie',
        data: {
            labels: <?= json_encode($labels_harga) ?>,
            datasets: [{
                label: 'Harga (Rp)',
                data: <?= json_encode($data_harga) ?>,
                backgroundColor: bgColors,
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // ====================================
    // GRAFIK 2: Bar Chart (Stok Produk)
    // ====================================
    new Chart(document.getElementById('chartBar'), {
        type: 'bar',
        data: {
            labels: <?= json_encode($labels_stok) ?>,
            datasets: [{
                label: 'Jumlah Stok',
                data: <?= json_encode($data_stok) ?>,
                backgroundColor: bgColors,
                borderColor: bgColors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Jumlah Stok' }
                },
                x: {
                    title: { display: true, text: 'Nama Produk' }
                }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });

    // ====================================
    // GRAFIK 3: Doughnut Chart (Produk per Kategori)
    // ====================================
    new Chart(document.getElementById('chartDoughnut'), {
        type: 'doughnut',
        data: {
            labels: <?= json_encode($labels_kategori) ?>,
            datasets: [{
                label: 'Jumlah Produk',
                data: <?= json_encode($data_kategori) ?>,
                backgroundColor: bgColors,
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>

</body>
</html>
```

Buka browser dan akses: **http://localhost/modul7/index.php**

> 📸 **Screenshot 4:** Tampilkan halaman dashboard dengan **ketiga grafik** tampil di browser (tampilkan full screen).

---

### Langkah 3 — Memahami Alur Data (PHP → JavaScript)

Jawab pertanyaan berikut berdasarkan kode di Langkah 2:

**3a.** Pada baris berikut, jelaskan apa fungsi `json_encode()` dan mengapa diperlukan:
```php
const labels = <?= json_encode($labels_harga) ?>;
```

**3b.** Apa perbedaan antara `type: 'pie'`, `type: 'bar'`, dan `type: 'doughnut'` pada kode Chart.js?

**3c.** Pada query berikut, jelaskan apa fungsi `LEFT JOIN` dan `GROUP BY`:
```sql
SELECT kategori.nama_kategori, COUNT(produk.id_produk) AS jumlah
FROM kategori
LEFT JOIN produk ON kategori.id_kategori = produk.id_kategori
GROUP BY kategori.id_kategori, kategori.nama_kategori;
```

> ✍️ **Jawab:** Tulis jawaban di lembar jawaban yang disediakan.

---

### Langkah 4 — Menambahkan Grafik Line Chart (Tren Penjualan)

Tambahkan grafik **Line Chart** baru ke halaman `index.php` yang menampilkan **total penjualan per produk** dari tabel `penjualan` yang sudah dibuat di Langkah 1.

#### 4a. Tambahkan kode PHP berikut (letakkan sebelum baris `?>` di bagian PHP atas)

```php
// ==================================================
// QUERY 4: Data untuk Line Chart (Total Penjualan per Produk)
// ==================================================
$sql_jual = "SELECT produk.nama_produk, SUM(penjualan.jumlah_terjual) AS total_terjual
             FROM penjualan
             JOIN produk ON penjualan.id_produk = produk.id_produk
             GROUP BY produk.id_produk, produk.nama_produk";
$result_jual = mysqli_query($koneksi, $sql_jual);
$all_jual    = mysqli_fetch_all($result_jual);

$labels_jual = array_column($all_jual, 0);
$data_jual   = array_column($all_jual, 1);
```

#### 4b. Tambahkan HTML berikut (letakkan setelah div doughnut chart, sebelum `</div>` penutup row)

```html
<!-- ========== GRAFIK 4: LINE CHART ========== -->
<div class="col-lg-6 mx-auto">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title text-center mb-3">📈 Line Chart — Total Penjualan per Produk</h5>
            <canvas id="chartLine"></canvas>
        </div>
    </div>
</div>
```

#### 4c. Tambahkan JavaScript berikut (letakkan sebelum `</script>` penutup)

```javascript
// ====================================
// GRAFIK 4: Line Chart (Total Penjualan)
// ====================================
new Chart(document.getElementById('chartLine'), {
    type: 'line',
    data: {
        labels: <?= json_encode($labels_jual) ?>,
        datasets: [{
            label: 'Total Terjual',
            data: <?= json_encode($data_jual) ?>,
            borderColor: '#f94144',
            backgroundColor: 'rgba(249, 65, 68, 0.1)',
            borderWidth: 2,
            fill: true,
            tension: 0.3
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                title: { display: true, text: 'Jumlah Terjual' }
            }
        },
        plugins: {
            legend: { position: 'bottom' }
        }
    }
});
```

> 📸 **Screenshot 5:** Tampilkan halaman dashboard yang sudah memiliki **4 grafik** (Pie, Bar, Doughnut, Line).

---

### Langkah 5 — Kustomisasi Tampilan

Lakukan **salah satu** modifikasi berikut pada halaman `index.php`:

**Pilihan A:** Ubah warna background gradient di CSS `body` menjadi warna lain yang kamu suka (contoh: `linear-gradient(135deg, #0f0c29, #302b63, #24243e)`).

**Pilihan B:** Tambahkan **tabel HTML** di bawah salah satu grafik yang menampilkan data mentah dari database (menggunakan `<?php foreach ... ?>` seperti yang dipelajari di Modul 5 & 6).

**Pilihan C:** Ubah salah satu grafik dari `type: 'bar'` menjadi `type: 'polarArea'` atau `type: 'radar'` dan lihat hasilnya.

> 📸 **Screenshot 6:** Tampilkan hasil kustomisasi yang kamu pilih beserta keterangan pilihan mana yang dikerjakan (A/B/C).

---

## Ketentuan Pengumpulan

1. Kerjakan semua langkah (**Langkah 1–5**) secara berurutan.
2. Setiap langkah yang memerlukan screenshot harus disertai **screenshot** hasil (total **6 screenshot**).
3. Kumpulkan screenshot dalam **Lembar Jawaban yang disediakan**.
4. Screenshot harus **full screen** dan menampilkan task bar (bagian bawah termasuk tanggal dan waktu).
5. Kumpulkan file dalam bentuk **PDF** ke GCR yang disediakan Asprak.
6. **Jangan hapus folder `modul7`** dan **database `toko_online_XXXX`** setelah selesai mengerjakan. File dan database ini akan digunakan pada saat **praktikum di hari H** untuk pengembangan lebih lanjut.
7. Jawaban pertanyaan di **Langkah 3** ditulis di lembar jawaban.

---

## Ringkasan Konsep yang Dipraktikkan

| Konsep | Yang Digunakan |
|--------|---------------|
| Koneksi PHP-MySQL | `mysqli_connect()` |
| Query SELECT | `SELECT ... FROM ... JOIN ... GROUP BY` |
| Pengambilan data | `mysqli_query()`, `mysqli_fetch_all()`, `array_column()` |
| Transfer data PHP → JS | `json_encode()` |
| Library Grafik | Chart.js (via CDN) |
| Jenis Grafik | Pie, Bar, Doughnut, Line |
| Framework CSS | Bootstrap 5 (via CDN) |
| Layout Responsif | Grid system (`row`, `col-lg-6`) |
| Komponen Bootstrap | `card`, `shadow`, `container` |
| SQL Aggregation | `COUNT()`, `SUM()`, `GROUP BY` |
| SQL Join | `JOIN`, `LEFT JOIN` |
| Tabel baru | `CREATE TABLE` dengan Foreign Key |

---

## Relasi dengan Modul Sebelumnya

| Modul | Konsep yang Digunakan Kembali |
|-------|------------------------------|
| Modul 2-3 (HTML & CSS) | Struktur HTML, styling dasar |
| Modul 4 (JavaScript) | Variabel, fungsi, DOM, library eksternal |
| Modul 5 (PHP) | Koneksi database, query, menampilkan data |
| Modul 6 (Database) | Database `toko_online_XXXX`, tabel `produk`, `kategori`, relasi antar tabel |

---

*Selamat mengerjakan! 🚀*
