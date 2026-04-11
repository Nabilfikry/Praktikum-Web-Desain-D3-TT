// ==========================================
// TUGAS PENDAHULUAN MODUL 4 - JAVASCRIPT
// Nama Lengkap : [NAMA MAHASISWA]
// NIM          : [NIM MAHASISWA]
// Kelas        : D3-TT-01
// ==========================================

console.log("File script.js (Eksternal) berhasil dihubungkan!");

// ==========================================
// LATIHAN 3: Eksternal JavaScript (Aplikasi Sapaan Sederhana)
// ==========================================
// Instruksi:
// 1. Pastikan file "script.js" ini sudah dipanggilpada file "index.html" (di bagian paling bawah, section 3).
// 2. Kita telah mengambil tag HTML (Input, Tombol, dan Tempat Hasil) ke dalam variabel di bawah ini.
// 3. Tugas Anda: Tambahkan event listener "click" pada variabel `btnSapa`.
// 4. Di dalam fungsi event listener tersebut, buat variabel baru berisi nilai ketikan dari kotak input. Gunakan: inputNama.value
// 5. Ubah teks dari variabel `outputSapa` dengan menggabungkan kata sapaan dan nama yang diinputkan. (Contoh: "Selamat Datang, " + nama)
// 6. Tampilkan kotak hasil dengan menghapus class "hidden" dari cetak hasil (kotakHasil.classList.remove("hidden"))

// Mengambil elemen HTML dari ID-nya
const inputNama = document.getElementById("input-nama");
const btnSapa = document.getElementById("btn-sapa");
const kotakHasil = document.getElementById("kotak-hasil");
const outputSapa = document.getElementById("output-sapa");

if (btnSapa) {
    // TODO: Buat event listener "click" pada btnSapa di bawah ini
    btnSapa.addEventListener("click", function() {
        console.log("Tombol sapa ditekan!");
        
        // a. Ambil teks yang diketik pengguna
        
        
        // b. Masukkan teks gabungan ke elemen hasil (outputSapa.textContent = ...)
        
        
        // c. Memunculkan kotak background hijau
        // kotakHasil.classList.remove("hidden");
    });
}
