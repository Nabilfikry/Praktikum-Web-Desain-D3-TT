<?php
// ============================================================
// UJIAN KOMPREHENSIF 2 — SOAL PRAKTIK
// FILE: index.php (Halaman Utama)
// ============================================================
// PETUNJUK:
//   File ini adalah halaman utama website.
//   Menampilkan data mahasiswa dalam tabel Bootstrap dan grafik Chart.js.
//   Lengkapi bagian yang bertanda ________ dengan jawaban yang tepat.
// ============================================================


// ============================================================
// SOAL 8: Lengkapi cara memanggil file koneksi.php
// Hint: Perintah PHP untuk menyertakan file lain (lihat Modul 5)
// ============================================================
________ 'koneksi.php';


// --- Query 1: Ambil semua data mahasiswa beserta nama jurusannya ---
$sql = "SELECT mahasiswa.nama, mahasiswa.nim, mahasiswa.ipk,
        jurusan.nama_jurusan
        FROM mahasiswa
        JOIN jurusan ON mahasiswa.id_jurusan = jurusan.id_jurusan";


// ============================================================
// SOAL 9: Lengkapi fungsi PHP untuk MENJALANKAN query SQL
// Hint: Fungsi ini bernama "mysqli_..." dan menerima 2 parameter
//       (koneksi dan query SQL)
// ============================================================
$result = ________($koneksi, $sql);


// ============================================================
// SOAL 10: Lengkapi fungsi PHP untuk MENGAMBIL SEMUA BARIS
//          hasil query menjadi array PHP
// Hint: Fungsi ini bernama "mysqli_fetch_..."
// ============================================================
$data = ________($result);


// --- Query 2: Hitung jumlah mahasiswa per jurusan (untuk grafik) ---
$sql_grafik = "SELECT jurusan.nama_jurusan, COUNT(mahasiswa.id_mhs) AS jumlah
               FROM jurusan
               LEFT JOIN mahasiswa ON jurusan.id_jurusan = mahasiswa.id_jurusan
               GROUP BY jurusan.id_jurusan, jurusan.nama_jurusan";

$result_grafik = mysqli_query($koneksi, $sql_grafik);
$all_grafik    = mysqli_fetch_all($result_grafik);

// Pisahkan data menjadi array label dan array nilai
$labels = array_column($all_grafik, 0);
$values = array_column($all_grafik, 1);

// Warna untuk grafik
$colors = ['#4361ee', '#f72585', '#4cc9f0'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa - Ujikom 2</title>

    <!-- Bootstrap 5 CSS (framework untuk tampilan responsif) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Chart.js (library untuk membuat grafik) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- CSS kustom tambahan -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ============================================================ -->
<!-- SOAL 11: Lengkapi class Bootstrap untuk membuat CONTAINER    -->
<!--          dengan padding atas-bawah                           -->
<!-- Hint: Class Bootstrap untuk wrapper responsif                -->
<!-- ============================================================ -->
<div class="________ py-5">

    <!-- ======================================================== -->
    <!-- IDENTITAS MAHASISWA                                       -->
    <!-- Ganti NAMA LENGKAP dan NIM dengan data diri Anda!         -->
    <!-- ======================================================== -->
    <h2 class="text-center mb-1 dashboard-title">🎓 Dashboard Data Mahasiswa</h2>
    <p class="text-center identitas mb-1">Nama: <span>NAMA LENGKAP: ______</span></p>
    <p class="text-center identitas mb-5">NIM: <span>NIM: _____</span></p>


    <!-- ==================== TABEL DATA ==================== -->
    <div class="row mb-4">
        <div class="col-lg-12">

            <!-- ============================================ -->
            <!-- SOAL 12: Lengkapi 2 class Bootstrap untuk    -->
            <!--          membuat CARD dengan BAYANGAN         -->
            <!-- Hint: Komponen kotak konten + efek shadow     -->
            <!--        (lihat Modul 7, bagian class Bootstrap)-->
            <!-- ============================================ -->
            <div class="________ ________">
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
                            // ============================================
                            // SOAL 13: Lengkapi jenis PERULANGAN PHP
                            //          untuk menampilkan setiap baris data
                            // Hint: Perulangan yang cocok untuk array
                            //       = "... ($data as $row)"
                            // ============================================
                            $no = 1;
                            ________ ($data as $row) {
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


    <!-- ==================== GRAFIK ==================== -->
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

<!-- ============================================================ -->
<!-- Mengirim data dari PHP ke JavaScript menggunakan json_encode  -->
<!-- ============================================================ -->
<script>
    // ============================================================
    // SOAL 15: Lengkapi fungsi PHP untuk mengubah array PHP
    //          menjadi format JSON agar bisa dibaca JavaScript
    // Hint: Fungsi ini bernama "json_..." 
    // ============================================================
    const chartLabels = <?= ________($labels) ?>;
    const chartValues = <?= ________($values) ?>;
    const chartColors = <?= json_encode($colors) ?>;
</script>

<!-- Memuat file JavaScript untuk grafik -->
<script src="script.js"></script>

</body>
</html>
