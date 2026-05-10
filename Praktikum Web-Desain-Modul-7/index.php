<?php
// ============================================================
// MODUL 7 — Visualisasi Data Database dalam Bentuk Grafik
// ============================================================
// File  : index.php
// Desc  : Contoh dasar — Pie Chart dari data produk
// DB    : toko_online_XXXX (dari Modul 6)
//         Ganti XXXX dengan 4 NIM terakhir kalian
// ============================================================

// --- Koneksi ke database (cara yang sama seperti Modul 6) ---
$koneksi = mysqli_connect("localhost", "root", "", "toko_online_XXXX");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// --- Query: ambil nama produk dan harga ---
$sql    = "SELECT nama_produk, harga FROM produk";
$result = mysqli_query($koneksi, $sql);
$all    = mysqli_fetch_all($result);

// --- Pisahkan data menjadi label dan nilai ---
$labels = array_column($all, 0);  // kolom 0 = nama_produk
$data   = array_column($all, 1);  // kolom 1 = harga

// --- Palet warna untuk grafik ---
$colors = [
  '#f94144', '#f3722c', '#f9844a', '#f9c74f',
  '#90be6d', '#43aa8b', '#577590', '#277da1'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grafik Harga Produk — Modul 7</title>

  <!-- Bootstrap 5 CSS (framework untuk layout responsif) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Chart.js (library untuk membuat grafik interaktif) -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-5">📊 Grafik Pie — Harga Produk</h2>
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Pie Chart</h5>
          <div class="chart-container">
            <canvas id="chartPie"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Data dari PHP dikirim ke JavaScript via json_encode()
  const labels   = <?= json_encode($labels) ?>;
  const values   = <?= json_encode($data) ?>;
  const bgColors = <?= json_encode($colors) ?>;

  // Membuat Pie Chart menggunakan Chart.js
  new Chart(document.getElementById('chartPie'), {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        label: 'Harga (Rp)',
        data: values,
        backgroundColor: bgColors,
        borderColor: '#fff',
        borderWidth: 2,
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
