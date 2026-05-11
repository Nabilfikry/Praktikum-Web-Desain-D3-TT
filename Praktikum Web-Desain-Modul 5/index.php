<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Koneksi DB</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #f4f6f8; margin: 0; padding: 30px; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h2 { margin-top: 0; color: #222; }
        .status { padding: 12px; margin: 15px 0; border-radius: 6px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border-color: #f5c6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
        th { background: #f8f9fa; }
    </style>
</head>
<body>
    <div class="container">
        <h2>📦 Latihan PHP & Database</h2>
        
        <?php
        require_once 'config.php';

        try {
            // 1. Buat tabel otomatis jika belum ada
            $pdo->exec("CREATE TABLE IF NOT EXISTS peserta (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nama VARCHAR(50) NOT NULL,
                kota VARCHAR(50)
            )");

            // 2. Isi data contoh jika tabel masih kosong
            $count = $pdo->query("SELECT COUNT(*) FROM peserta")->fetchColumn();
            if ($count == 0) {
                $stmt = $pdo->prepare("INSERT INTO peserta (nama, kota) VALUES (:nama, :kota)");
                $stmt->execute(['nama' => 'Budi', 'kota' => 'Jakarta']);
                $stmt->execute(['nama' => 'Siti', 'kota' => 'Bandung']);
            }

            // 3. Ambil & tampilkan data
            $data = $pdo->query("SELECT * FROM peserta")->fetchAll();
            
            echo '<div class="status"> Berhasil terhubung ke database <strong>'. htmlspecialchars($db) .'</strong></div>';
            
            echo '<h3>Data Peserta:</h3>';
            echo '<table><tr><th>ID</th><th>Nama</th><th>Kota</th></tr>';
            foreach ($data as $row) {
                echo '<tr><td>'. $row['id'] .'</td><td>'. htmlspecialchars($row['nama']) .'</td><td>'. htmlspecialchars($row['kota']) .'</td></tr>';
            }
            echo '</table>';

        } catch (PDOException $e) {
            echo '<div class="status error">❌ Error: '. htmlspecialchars($e->getMessage()) .'</div>';
        }
        ?>
    </div>
</body>
</html>