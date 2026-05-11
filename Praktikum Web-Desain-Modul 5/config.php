<?php
$host = 'localhost'; // Host database
$db   = 'latihan-lab'; // Nama database
$user = 'root';
$pass = '';           // Default XAMPP: password kosong
//$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>