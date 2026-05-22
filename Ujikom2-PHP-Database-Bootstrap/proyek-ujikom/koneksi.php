<?php
// ============================================================
// UJIAN KOMPREHENSIF 2 — SOAL PRAKTIK
// FILE: koneksi.php
// ============================================================
// PETUNJUK:
//   File ini bertugas menghubungkan PHP ke database MySQL.
//   Lengkapi bagian yang bertanda ________ dengan jawaban yang tepat.
//   Sesuaikan nama database (XXXX) dengan 4 NIM terakhir Anda.
// ============================================================


// ============================================================
// SOAL 6: Lengkapi nilai variabel host dan user
// Hint: Host default XAMPP/Laragon = "localhost"
//       Username default XAMPP/Laragon = "root"
// ============================================================
$host = "________";
$user = "________";
$pass = "";                        // Password default XAMPP (kosong)
$db   = "ujikom_mahasiswa_XXXX";   // Ganti XXXX dengan 4 NIM terakhir


// ============================================================
// SOAL 7: Lengkapi nama fungsi PHP untuk membuat koneksi ke MySQL
// Hint: Fungsi ini bernama "mysqli_..." dan menerima 4 parameter
// ============================================================
$koneksi = ________($host, $user, $pass, $db);


// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
