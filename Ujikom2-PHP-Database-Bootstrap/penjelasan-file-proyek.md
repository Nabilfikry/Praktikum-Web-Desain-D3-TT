# Penjelasan Singkat File Proyek Ujikom 2

Proyek **Dashboard Data Mahasiswa** (`proyek-ujikom`) terdiri dari 5 buah file yang saling terintegrasi. Berikut adalah penjelasan fungsi dari masing-masing file tersebut:

### 1. `database.sql`
File ini berisi kumpulan instruksi (query) bahasa SQL. Fungsinya adalah untuk membuat database baru (`ujikom_mahasiswa_XXXX`), membuat tabel-tabel yang dibutuhkan (`jurusan` dan `mahasiswa`), serta memasukkan data-data awal (dummy data) ke dalam tabel tersebut. File ini tidak dijalankan di browser, melainkan harus di-copy dan dijalankan (dieksekusi) melalui tab SQL di **phpMyAdmin**.

### 2. `koneksi.php`
File ini adalah sebuah script murni PHP. Fungsinya sangat spesifik, yaitu sebagai "jembatan" penghubung antara aplikasi website yang kita buat dengan database MySQL. Di dalamnya terdapat konfigurasi *host*, *username*, *password*, nama database, serta fungsi `mysqli_connect()` untuk memastikan PHP bisa berkomunikasi dan mengambil data dari database.

### 3. `index.php`
Ini adalah halaman utama dari aplikasi website. File ini merupakan gabungan dari kode PHP, HTML, dan pemanggilan CSS Bootstrap. Fungsinya adalah:
* Memanggil `koneksi.php` agar terhubung ke database.
* Mengambil data mahasiswa dan jurusan dari database menggunakan perintah SQL `SELECT`.
* Menampilkan data tersebut ke layar pengguna dalam bentuk tabel yang sudah didesain rapi dengan Bootstrap.
* Menyiapkan data angka (jumlah mahasiswa per jurusan) yang akan dikirim ke JavaScript untuk diubah menjadi grafik.

### 4. `style.css`
File ini berisi kode CSS tambahan buatan sendiri. Meskipun kita sudah menggunakan Bootstrap untuk layout dasar, file ini berfungsi memberikan sentuhan visual/desain ekstra agar halaman terlihat lebih modern, misalnya memberikan warna latar belakang (*background*) bergradasi gelap, mengubah warna teks judul, dan memperhalus bentuk kotak konten (*card*).

### 5. `script.js`
File ini berisi kode JavaScript. Fungsinya adalah menangkap data jumlah mahasiswa yang telah disiapkan oleh `index.php`, lalu memproses data tersebut menggunakan library **Chart.js**. Kode di dalamnya akan secara otomatis menggambar atau merender (mencetak) visualisasi **Grafik Batang (Bar Chart)** ke bagian kanvas (`<canvas>`) yang ada di halaman utama.
