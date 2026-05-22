const elemenJudul = document.getElementById("judul");
const tombolGanti = document.getElementById("tombolGanti");
const tombolGantiWarna = document.getElementById("tombolGantiWarna");
const tombolKembali = document.getElementById("tombolKembali");

const judulArray = [
    "Judul Awal",
    "Judul Telah Diubah oleh JavaScript!",
    "Judul Kedua",
    "Judul Ketiga",
    "Judul Keempat"
];

const warnaArray = ["black", "red", "blue", "green", "orange"];

let indexJudul = 0;
let indexWarna = 0;

// TODO: Lengkapi event listener untuk mengubah teks judul saat tombol diklik
// Hint: gunakan indexJudul dan judulArray
tombolGanti.addEventListener("click", function() {
    
});

// TODO: Lengkapi event listener untuk mengganti warna judul saat tombol diklik
// Hint: gunakan indexWarna, warnaArray, dan elemenJudul.style.color
tombolGantiWarna.addEventListener("click", function() {
    
});

// TODO: Lengkapi event listener untuk mengembalikan judul dan warna ke awal
tombolKembali.addEventListener("click", function() {
    
});