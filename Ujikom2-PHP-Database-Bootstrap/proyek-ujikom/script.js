// ============================================================
// UJIAN KOMPREHENSIF 2 — SOAL PRAKTIK
// FILE: script.js
// ============================================================
// PETUNJUK:
//   File ini membuat grafik Bar Chart menggunakan Chart.js.
//   Variabel chartLabels, chartValues, dan chartColors
//   sudah dikirim dari PHP melalui index.php (via json_encode).
//   Lengkapi bagian yang bertanda ________ dengan jawaban yang tepat.
// ============================================================


// ============================================================
// SOAL 14: Lengkapi jenis grafik yang akan dibuat
// Hint: Kita ingin membuat grafik BATANG (lihat Modul 7, tabel jenis grafik)
//       Pilihan: 'pie', 'bar', 'line', 'doughnut'
// ============================================================
new Chart(document.getElementById('chartMahasiswa'), {
    type: '________',
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
