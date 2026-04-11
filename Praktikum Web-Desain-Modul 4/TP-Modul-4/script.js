// ==========================================
// TUGAS PENDAHULUAN MODUL 4 - JAVASCRIPT
// Nama Lengkap : [NAMA MAHASISWA]
// NIM          : [NIM MAHASISWA]
// Kelas        : D3-TT-01
// ==========================================

console.log("File script.js (Eksternal) berhasil dihubungkan!");

// ==========================================
// LATIHAN 3: Eksternal JavaScript (Fungsi & Percabangan)
// ==========================================

// Variabel untuk mengambil elemen HTML
const inputNilai = document.getElementById("input-nilai");
const btnCek = document.getElementById("btn-cek");
const kotakHasil = document.getElementById("kotak-hasil");
const outputHasil = document.getElementById("output-hasil");

// -------------------------------------------------------------
// TODO 1: Buat FUNGSI bernama "cekStatusUjian" (Menerima parameter 'nilai')
// -------------------------------------------------------------
// Fokus Latihan: FUNGSI (Function) & PERCABANGAN (If-Else)
// Instruksi:
// a. Gunakan percabangan if-else di dalam fungsi ini.
// b. Jika nilai >= 70, kembalikan (return) teks "LULUS!".
// c. Jika nilai < 70, kembalikan (return) teks "REMEDIAL!".

function cekStatusUjian(nilai) {
    // Tulis logika percabangan if-else di sini
    
}


// -------------------------------------------------------------
// TODO 2: Event Listener Tombol Saat Diklik
// -------------------------------------------------------------
if (btnCek) {
    btnCek.addEventListener("click", function() {
        console.log("Tombol Cek Kelulusan ditekan!");
        
        // 1. Ambil angka yang diketik pada kotak input (dan ubah jadi tipe data Number)
        // const nilaiDiinput = Number(inputNilai.value);
        
        // 2. Panggil fungsi yang telah kamu buat di atas dengan memasukkan variabel 'nilaiDiinput'
        // const status = cekStatusUjian(nilaiDiinput);
        
        // 3. Tampilkan teks hasilnya pada elemen output
        // outputHasil.textContent = status;
        
        // 4. Memunculkan kotak background agar bisa dilihat (Hapus saja tanda // di blok bawah untuk melihat efek kotaknya)
        
        /* tanda /* digunakan untuk membuat komentar */
        /* maka hilangkan tanda /* dan di depan dan belakang jika ingin mengaktifkan kode di bawah */

        /*
        kotakHasil.classList.remove("hidden");
        if (status === "LULUS!") {
            kotakHasil.style.backgroundColor = "#28a745"; // Hijau
        } else {
            kotakHasil.style.backgroundColor = "#dc3545"; // Merah
        }
        */
        
    });
}
