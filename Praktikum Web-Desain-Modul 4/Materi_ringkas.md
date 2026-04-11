# 📦 MODUL 4: Pengantar JavaScript untuk Pengembangan Web

---

## 🎯 Tujuan Pembelajaran

Setelah menyelesaikan modul ini, mahasiswa mampu:

- Memahami apa itu JavaScript dan perannya dalam website
- Menambahkan JavaScript ke halaman HTML
- Menggunakan variabel, tipe data, dan operator
- Menulis percabangan dan perulangan
- Membuat fungsi sederhana
- Memanipulasi elemen HTML menggunakan DOM
- Mengambil data dari internet menggunakan Fetch API

---


# BAB 1 — Apa itu JavaScript?

## Definisi

**JavaScript (JS)** adalah bahasa pemrograman yang berjalan di dalam browser dan digunakan untuk membuat halaman web menjadi **interaktif**. Jika HTML menentukan *apa* yang ditampilkan dan CSS menentukan *bagaimana* tampilannya, maka JavaScript menentukan *bagaimana perilakunya*.

JavaScript diciptakan oleh **Brendan Eich** pada tahun 1995, dan kini menjadi salah satu bahasa pemrograman paling populer di dunia — digunakan oleh hampir **semua website modern**.

## Analogi Sederhana

Bayangkan membangun sebuah rumah:

| Komponen | Analogi | Peran |
|----------|---------|-------|
| **HTML** | Rangka & dinding | Menentukan struktur dan konten halaman |
| **CSS** | Cat, dekorasi, tata letak | Mengatur tampilan visual |
| **JavaScript** | Listrik, saklar, pintu otomatis | Menambahkan perilaku dan interaksi |

Tanpa JavaScript, website seperti poster digital — bisa dilihat, tapi tidak bisa berinteraksi. Dengan JavaScript, website bisa:

- 🖱️ **Merespons klik** — tombol yang menjalankan aksi saat diklik
- 📝 **Memvalidasi form** — mengecek apakah email sudah benar sebelum dikirim
- 🔄 **Mengubah tampilan secara dinamis** — mengubah teks, warna, atau menyembunyikan elemen tanpa reload halaman
- 🌐 **Mengambil data dari server** — menampilkan data cuaca, berita, atau produk dari internet

## Cara Kerja di Browser

Ketika pengguna membuka website, browser melakukan langkah-langkah berikut:

```
1. Browser MEMBACA file HTML     → membangun struktur halaman
        ↓
2. Browser MENERAPKAN CSS        → menata tampilan visual
        ↓
3. Browser MENGEKSEKUSI JavaScript  → menambahkan interaksi
```

Setiap browser modern memiliki **JavaScript engine** yang bertugas menjalankan kode JS:

| Browser | Engine |
|---------|--------|
| Chrome / Edge | V8 |
| Firefox | SpiderMonkey |
| Safari | JavaScriptCore |

> 💡 Artinya, JavaScript **tidak perlu di-install** — cukup tulis kode, buka di browser, dan langsung jalan!

---


# BAB 2 — Menambahkan JavaScript ke HTML

Ada tiga cara menyisipkan JavaScript ke halaman HTML:

| Cara | Contoh | Keterangan |
|------|--------|------------|
| **Inline** | `<button onclick="alert('Halo')">` | Langsung di atribut HTML. ❌ Tidak disarankan |
| **Internal** | `<script> ... </script>` | Di dalam file HTML. ⚠️ Hanya untuk kode kecil |
| **Eksternal** | `<script src="script.js"></script>` | File terpisah. ✅ **Direkomendasikan** |

## Cara yang Direkomendasikan: File Eksternal

### Struktur folder:

```
project/
├── index.html
├── style.css
└── script.js
```

### Contoh `index.html`:

```html
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar JavaScript</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Halo JavaScript!</h1>
  <button id="tombol">Klik Saya</button>

  <!-- Letakkan script di sini, tepat sebelum </body> -->
  <script src="script.js"></script>
</body>
</html>
```

### Contoh `script.js`:

```javascript
console.log("File JavaScript berhasil terhubung!");
```

> ⚠️ **Mengapa script diletakkan sebelum `</body>`?**
>
> Karena browser membaca HTML dari atas ke bawah. Jika script diletakkan di `<head>`, JavaScript akan dijalankan **sebelum** elemen HTML terbentuk — akibatnya, JavaScript tidak bisa menemukan elemen yang ingin dimanipulasi. Meletakkan script di akhir `<body>` memastikan semua elemen HTML sudah siap.

---


# BAB 3 — Output: Menampilkan Hasil Kode

Sebelum belajar lebih jauh, kita perlu tahu cara **melihat hasil** kode JavaScript. Ada dua cara utama:

## 1. `console.log()` — Menampilkan ke Console Browser

Console adalah "layar belakang" yang digunakan developer untuk melihat output dan men-debug kode.

```javascript
console.log("Halo Dunia!");       // Menampilkan teks
console.log(42);                  // Menampilkan angka
console.log(true);                // Menampilkan boolean
console.log("Umur saya:", 20);   // Menampilkan beberapa nilai sekaligus
```

> 💡 **Cara membuka Console:**
> Klik kanan di halaman web → pilih **Inspect** → klik tab **Console**.
> Atau tekan `F12` / `Ctrl + Shift + J` (Windows) / `Cmd + Option + J` (Mac).

## 2. `alert()` — Menampilkan Pop-up Dialog

```javascript
alert("Selamat datang!");
```

Pop-up ini akan muncul di tengah layar dan menghentikan eksekusi kode sampai pengguna menekan "OK". Cocok untuk pemberitahuan sederhana, tapi **jangan digunakan berlebihan** karena mengganggu pengguna.

## Kapan Menggunakan Yang Mana?

| Method | Gunakan Untuk |
|--------|---------------|
| `console.log()` | Debugging, mengecek nilai variabel, melihat alur program |
| `alert()` | Notifikasi penting kepada pengguna |

> 💡 Selama belajar, gunakan `console.log()` sebagai **alat utama** untuk melihat hasil kode. `alert()` hanya sesekali.

---


# BAB 4 — Variabel & Tipe Data

## Apa itu Variabel?

Variabel adalah **wadah untuk menyimpan data**. Sama seperti kotak berlabel — kita memberi nama pada kotak, lalu memasukkan sesuatu ke dalamnya.

```javascript
let nama = "Budi";       // Kotak bernama "nama", isinya "Budi"
let umur = 20;           // Kotak bernama "umur", isinya 20
```

## Deklarasi Variabel: `let` vs `const`

JavaScript modern menggunakan dua kata kunci untuk membuat variabel:

```javascript
let warna = "merah";     // BISA diubah nilainya nanti
warna = "biru";          // ✅ Ok — mengubah nilai

const PI = 3.14;         // TIDAK BISA diubah nilainya
PI = 3.15;               // ❌ Error! Konstanta tidak bisa diubah
```

| Kata Kunci | Bisa Diubah? | Kapan Digunakan |
|------------|-------------|-----------------|
| `let` | ✅ Ya | Ketika nilai akan berubah (counter, input user, dll.) |
| `const` | ❌ Tidak | Ketika nilai tetap (PI, URL API, konfigurasi) |

> ⚠️ **Tips:** Gunakan `const` sebagai **default**. Hanya gunakan `let` jika Anda yakin nilainya perlu diubah. Hindari `var` — itu cara lama yang sudah tidak direkomendasikan.

## Aturan Penamaan Variabel

```javascript
let namaLengkap;     // ✅ camelCase — huruf kecil di awal, kapital di kata berikutnya
let jumlahMahasiswa; // ✅ Deskriptif dan jelas
let x;               // ❌ Terlalu singkat — tidak jelas isinya apa

let 1data;           // ❌ Tidak boleh diawali angka
let nama lengkap;    // ❌ Tidak boleh ada spasi
```

> 💡 JavaScript bersifat **case-sensitive**: `nama`, `Nama`, dan `NAMA` adalah tiga variabel yang **berbeda**.

## Tipe Data

Tipe data menentukan **jenis nilai** yang disimpan. Untuk pemula, ada 5 tipe utama yang perlu diketahui:

### Tipe Data Primitif

```javascript
// 1. String — teks (diapit tanda kutip)
let nama = "Siti Aminah";
let pesan = 'Selamat datang';
let sapaan = `Halo, ${nama}!`;     // Template literal — bisa menyisipkan variabel

// 2. Number — angka (bulat maupun desimal)
let umur = 20;
let tinggi = 165.5;

// 3. Boolean — hanya dua nilai: true atau false
let sudahLogin = true;
let isAdmin = false;

// 4. null — nilai "kosong" yang disengaja oleh programmer
let data = null;              // "Saya tahu belum ada datanya"

// 5. undefined — variabel belum diberi nilai
let hasil;
console.log(hasil);           // undefined — JavaScript yang mengatur ini
```

### Perbedaan `null` vs `undefined`

| | `null` | `undefined` |
|-|--------|-------------|
| **Siapa yang set?** | Programmer (sengaja) | JavaScript (otomatis) |
| **Artinya** | "Saya sengaja mengosongkan ini" | "Belum ada nilainya" |

### Tipe Data Non-Primitif

```javascript
// Array — kumpulan data berurutan (seperti daftar)
let buah = ["Apel", "Mangga", "Jeruk"];
console.log(buah[0]);     // "Apel"   — index dimulai dari 0
console.log(buah[2]);     // "Jeruk"
console.log(buah.length); // 3        — jumlah elemen

// Object — kumpulan data dengan label (key-value)
let mahasiswa = {
  nama: "Budi Santoso",
  umur: 20,
  jurusan: "Teknik Informatika"
};
console.log(mahasiswa.nama);    // "Budi Santoso"
console.log(mahasiswa.umur);    // 20
```

## Mengecek Tipe Data

Gunakan `typeof` untuk mengetahui tipe data suatu nilai:

```javascript
typeof "Halo";     // "string"
typeof 42;         // "number"
typeof true;       // "boolean"
typeof undefined;  // "undefined"
```

---


# BAB 5 — Operator

Operator adalah simbol yang digunakan untuk **melakukan operasi** pada nilai. Berikut operator-operator yang paling sering digunakan:

## 1. Operator Aritmatika (Matematika)

```javascript
let a = 10, b = 3;

a + b      // 13    — Penjumlahan
a - b      // 7     — Pengurangan
a * b      // 30    — Perkalian
a / b      // 3.33  — Pembagian
a % b      // 1     — Modulus (sisa bagi)
```

> ⚠️ **Hati-hati:** Operator `+` pada string akan **menggabungkan** teks, bukan menjumlahkan!
> ```javascript
> "5" + 3      // "53" — string concatenation, bukan penjumlahan!
> 5 + 3        // 8    — penjumlahan angka
> ```

## 2. Operator Perbandingan

Menghasilkan nilai **boolean** (`true` / `false`). Digunakan dalam kondisi `if`.

```javascript
10 > 5       // true    — lebih besar
10 < 5       // false   — lebih kecil
10 >= 10     // true    — lebih besar atau sama dengan
10 <= 5      // false   — lebih kecil atau sama dengan
10 === 10    // true    — sama (nilai DAN tipe)
10 !== 5     // true    — tidak sama
```

> ⚠️ **Penting:** Selalu gunakan `===` (tiga sama dengan), bukan `==` (dua sama dengan).
>
> ```javascript
> 5 == "5"    // true  ⚠️ — JavaScript mengkonversi tipe secara otomatis
> 5 === "5"   // false ✅ — Membandingkan nilai DAN tipe data
> ```
>
> Dengan `===`, tipe data harus sama persis. Ini mencegah bug yang sulit dilacak.

## 3. Operator Logika

Digunakan untuk menggabungkan beberapa kondisi.

```javascript
let umur = 20;
let punyaKTP = true;

// AND (&&) — KEDUA kondisi harus true
umur >= 17 && punyaKTP      // true   (20 >= 17 ✅ DAN punyaKTP ✅)

// OR (||) — SALAH SATU kondisi true sudah cukup
umur >= 17 || punyaKTP      // true

// NOT (!) — membalik nilai boolean
!true                       // false
!false                      // true
```

## 4. Operator Assignment

Shorthand untuk mengubah nilai variabel:

```javascript
let x = 10;

x += 5;      // x = x + 5  → 15
x -= 3;      // x = x - 3  → 12
x *= 2;      // x = x * 2  → 24
x /= 4;      // x = x / 4  → 6
```

---


# BAB 6 — Struktur Kontrol

Struktur kontrol mengatur **alur eksekusi** program. Tanpa struktur kontrol, kode hanya berjalan lurus dari atas ke bawah.

## 6.1 Percabangan: `if / else if / else`

Menjalankan kode tertentu **hanya jika kondisi terpenuhi**.

```javascript
let nilai = 85;

if (nilai >= 90) {
  console.log("Grade: A");
} else if (nilai >= 80) {
  console.log("Grade: B");     // ← Ini yang dijalankan (85 >= 80)
} else if (nilai >= 70) {
  console.log("Grade: C");
} else {
  console.log("Grade: D");
}
```

**Cara membaca kode di atas:**

```
Apakah nilai >= 90?  → TIDAK (85 < 90)
Apakah nilai >= 80?  → YA (85 >= 80), jalankan blok ini → "Grade: B"
(berhenti, tidak cek kondisi selanjutnya)
```

### Contoh Praktis: Cek Umur

```javascript
let umur = 16;

if (umur >= 17) {
  console.log("Anda boleh membuat SIM");
} else {
  console.log("Anda belum cukup umur untuk membuat SIM");
}
```

## 6.2 Perulangan (Loop)

Menjalankan blok kode **berulang kali**. Sangat berguna saat kita perlu melakukan hal yang sama untuk banyak data.

### `for` — Ketika jumlah pengulangan sudah diketahui

```javascript
// Cetak angka 1 sampai 5
for (let i = 1; i <= 5; i++) {
  console.log("Angka:", i);
}

// Output:
// Angka: 1
// Angka: 2
// Angka: 3
// Angka: 4
// Angka: 5
```

**Anatomi `for` loop:**

```javascript
for (let i = 1;  i <= 5;  i++) { ... }
//   ─────────   ──────   ────
//       ↓          ↓       ↓
//  inisialisasi  kondisi  increment
//  (sekali saja) (cek    (setelah tiap
//                 tiap     iterasi)
//                iterasi)
```

### `while` — Ketika jumlah pengulangan belum diketahui

```javascript
let hitungan = 0;

while (hitungan < 3) {
  console.log("Hitungan:", hitungan);
  hitungan++;   // WAJIB! Tanpa ini, loop berjalan selamanya (infinite loop)
}

// Output:
// Hitungan: 0
// Hitungan: 1
// Hitungan: 2
```

### Contoh Praktis: Loop melalui Array

```javascript
let mahasiswa = ["Budi", "Siti", "Andi", "Dewi"];

for (let i = 0; i < mahasiswa.length; i++) {
  console.log("Halo, " + mahasiswa[i] + "!");
}

// Output:
// Halo, Budi!
// Halo, Siti!
// Halo, Andi!
// Halo, Dewi!
```

> 💡 **Metode lebih modern** — gunakan `forEach`:
> ```javascript
> mahasiswa.forEach(function(nama) {
>   console.log("Halo, " + nama + "!");
> });
> ```

---


# BAB 7 — Fungsi (Function)

Fungsi adalah **blok kode yang bisa dipakai ulang**. Daripada menulis kode yang sama berulang-ulang, kita membungkusnya dalam fungsi dan memanggilnya kapan saja diperlukan.

## Analogi

Fungsi seperti **resep masakan** — ditulis sekali, bisa dimasak berulang kali. Setiap kali memasak, kita bisa mengubah bahan (parameter) untuk hasil yang berbeda.

## Membuat dan Memanggil Fungsi

```javascript
// MEMBUAT fungsi (mendefinisikan "resep")
function sapa(nama) {
  console.log("Halo, " + nama + "!");
}

// MEMANGGIL fungsi (menggunakan "resep")
sapa("Budi");     // Output: Halo, Budi!
sapa("Siti");     // Output: Halo, Siti!
sapa("Andi");     // Output: Halo, Andi!
```

## Parameter & Return

- **Parameter** = bahan yang diterima fungsi
- **Return** = hasil yang dikembalikan fungsi

```javascript
function hitungLuas(panjang, lebar) {
  return panjang * lebar;    // Mengembalikan hasil ke pemanggil
}

let luas = hitungLuas(5, 3);
console.log("Luas:", luas);  // Luas: 15

// Parameter bisa punya nilai default
function sapa(nama = "Tamu") {
  return "Halo, " + nama + "!";
}
sapa();         // "Halo, Tamu!"       — menggunakan default
sapa("Budi");   // "Halo, Budi!"      — menggunakan argument
```

## Arrow Function (ES6+)

Cara penulisan fungsi yang lebih singkat:

```javascript
// Function biasa
function tambah(a, b) {
  return a + b;
}

// Arrow function (setara)
const tambah = (a, b) => {
  return a + b;
};

// Arrow function — versi singkat (jika hanya 1 baris return)
const tambah = (a, b) => a + b;
```

> 💡 Untuk pemula, gunakan function biasa dulu (`function namaFungsi() {}`). Arrow function bisa dipelajari setelah terbiasa.

---


# BAB 8 — DOM Manipulation

**DOM (Document Object Model)** adalah cara JavaScript "melihat" dan "mengubah" halaman HTML. Setiap elemen HTML (tag) direpresentasikan sebagai **objek** yang bisa diakses oleh JavaScript.

Bayangkan DOM seperti **remote control** untuk halaman web — JavaScript bisa mengubah teks, warna, menambah elemen baru, atau menghapus elemen yang ada.

```
Struktur DOM:

document
  └── html
      ├── head
      │   └── title
      └── body
          ├── h1
          ├── p
          └── button
```

## 8.1 Mengakses Elemen HTML

Langkah pertama: **memilih elemen** mana yang ingin dimanipulasi.

```html
<!-- HTML -->
<h1 id="judul">Selamat Datang</h1>
<p class="deskripsi">Ini adalah paragraf.</p>
<button id="tombol">Klik Saya</button>
```

```javascript
// Memilih berdasarkan ID → mengembalikan SATU elemen
let judul = document.getElementById("judul");

// Memilih berdasarkan CSS selector → mengembalikan elemen PERTAMA yang cocok
let paragraf = document.querySelector(".deskripsi");

// Memilih SEMUA elemen yang cocok → mengembalikan kumpulan (NodeList)
let semuaParagraf = document.querySelectorAll("p");
```

## 8.2 Mengubah Konten

```javascript
let judul = document.getElementById("judul");

// Mengubah teks
judul.textContent = "Judul Baru";

// Mengubah HTML di dalam elemen
judul.innerHTML = "Judul <em>Miring</em>";
```

> ⚠️ Gunakan `textContent` untuk teks biasa (lebih aman). Gunakan `innerHTML` hanya jika memang perlu menyisipkan tag HTML.

## 8.3 Mengubah Style & Class

```javascript
let judul = document.getElementById("judul");

// Mengubah style langsung (inline)
judul.style.color = "red";
judul.style.fontSize = "32px";
judul.style.backgroundColor = "yellow";

// Mengubah class — LEBIH DISARANKAN (memisahkan styling dari logic)
judul.classList.add("aktif");          // Menambah class
judul.classList.remove("aktif");       // Menghapus class
judul.classList.toggle("aktif");       // Toggle: tambah ↔ hapus
```

> 💡 **Best Practice:** Definisikan style di file CSS, lalu gunakan `classList` untuk menambah/menghapus class dari JavaScript. Ini menjaga kode tetap rapi.

## 8.4 Membuat & Menghapus Elemen

```javascript
// MEMBUAT elemen baru
let elBaru = document.createElement("p");
elBaru.textContent = "Saya paragraf baru!";

// MENAMBAHKAN ke halaman
let container = document.getElementById("container");
container.appendChild(elBaru);

// MENGHAPUS elemen
elBaru.remove();
```

## 8.5 Event — Merespons Aksi Pengguna

**Event** adalah aksi yang terjadi di halaman — klik, ketik, hover, scroll, dll. Kita bisa membuat JavaScript **merespons** event tersebut.

```javascript
let tombol = document.getElementById("tombol");

tombol.addEventListener("click", function() {
  alert("Tombol berhasil diklik!");
});
```

### Event yang Paling Sering Digunakan

| Event | Kapan Terjadi |
|-------|---------------|
| `click` | Elemen diklik |
| `input` | Nilai input berubah (saat mengetik) |
| `submit` | Form di-submit |
| `mouseover` | Mouse masuk area elemen |
| `keydown` | Tombol keyboard ditekan |

### Contoh Praktis: Tombol Ganti Warna

```html
<!-- HTML -->
<button id="tombolWarna">Ganti Warna</button>
```

```javascript
// JavaScript
let tombol = document.getElementById("tombolWarna");

tombol.addEventListener("click", function() {
  document.body.style.backgroundColor = "lightblue";
});
```

### Contoh Praktis: Mengubah Teks Saat Tombol Diklik

```html
<!-- HTML -->
<h1 id="judul">Teks Awal</h1>
<button id="tombolUbah">Ubah Teks</button>
```

```javascript
// JavaScript
let judul = document.getElementById("judul");
let tombol = document.getElementById("tombolUbah");

tombol.addEventListener("click", function() {
  judul.textContent = "Teks Sudah Berubah! 🎉";
  judul.style.color = "green";
});
```

---


# BAB 9 — Fetch API: Mengambil Data dari Internet

Di dunia nyata, website sering perlu **mengambil data dari server** — data produk, cuaca, berita, profil pengguna, dll. **Fetch API** adalah cara JavaScript melakukan ini.

## Konsep Sederhana

Fetch API seperti **mengirim pesan ke restoran** (server):
1. Anda **memesan** makanan (mengirim request ke URL)
2. Restoran **memproses** pesanan (server memproses request)
3. Makanan **diantar** ke meja Anda (data dikirim kembali sebagai response)

## Mengambil Data dengan Fetch

```javascript
// Mengambil data dari API publik
fetch("https://dummyjson.com/quotes/random")
  .then(function(response) {
    return response.json();          // Ubah response menjadi objek JavaScript
  })
  .then(function(data) {
    console.log(data);               // Gunakan datanya
    console.log(data.quote);         // Akses properti spesifik
    console.log(data.author);
  })
  .catch(function(error) {
    console.error("Gagal:", error);  // Tangani jika terjadi error
  });
```

### Memahami Kode di Atas

| Bagian | Penjelasan |
|--------|------------|
| `fetch(url)` | Mengirim request ke URL yang dituju |
| `.then(response => response.json())` | Mengubah response mentah menjadi format JSON (objek JavaScript) |
| `.then(data => ...)` | Menggunakan data yang sudah diubah |
| `.catch(error => ...)` | Menangkap error jika request gagal (misal: internet mati) |

> 💡 **Apa itu JSON?**
> JSON (JavaScript Object Notation) adalah format teks untuk mengirim data antar komputer. Bentuknya mirip object JavaScript:
> ```json
> {
>   "quote": "Life is beautiful",
>   "author": "Albert Einstein"
> }
> ```

## Cara Lebih Modern: `async/await`

`async/await` membuat kode asynchronous terlihat seperti kode biasa — **lebih mudah dibaca**:

```javascript
async function ambilQuote() {
  try {
    let response = await fetch("https://dummyjson.com/quotes/random");
    let data = await response.json();

    console.log(data.quote);    // Menampilkan kutipan
    console.log(data.author);   // Menampilkan penulis
  } catch (error) {
    console.error("Gagal mengambil data:", error);
  }
}

ambilQuote();  // Panggil fungsinya
```

| Kata Kunci | Artinya |
|------------|---------|
| `async` | Menandai fungsi sebagai "asynchronous" — bisa menggunakan `await` di dalamnya |
| `await` | "Tunggu sampai selesai" — menunggu response sebelum lanjut ke baris berikutnya |
| `try { }` | Blok kode yang mungkin menghasilkan error |
| `catch (error) { }` | Blok yang dijalankan jika terjadi error |

---


# 🧪 Studi Kasus — Quote Generator

Mari gabungkan semua konsep yang telah dipelajari (**DOM + Event + Fetch API**) untuk membuat aplikasi **Quote Generator** — aplikasi sederhana yang menampilkan kutipan acak dari internet.

### 📁 Struktur File

```
quote-generator/
├── index.html
└── script.js
```

### `index.html`

```html
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quote Generator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }
    #quoteText {
      font-size: 1.5rem;
      font-style: italic;
      max-width: 600px;
      text-align: center;
    }
    #quoteAuthor {
      font-weight: bold;
      color: #555;
    }
    button {
      margin-top: 20px;
      padding: 12px 24px;
      font-size: 1rem;
      cursor: pointer;
      border: none;
      background-color: #4CAF50;
      color: white;
      border-radius: 8px;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h1>💬 Quote Generator</h1>
  <p id="quoteText">Klik tombol untuk mendapatkan quote!</p>
  <p id="quoteAuthor"></p>
  <button id="tombolAmbilData">Ambil Quote Baru</button>

  <script src="script.js"></script>
</body>
</html>
```

### `script.js`

```javascript
// ==========================================
// QUOTE GENERATOR — Studi Kasus Modul 4
// ==========================================

// LANGKAH 1: Ambil referensi elemen dari DOM
const tombol = document.getElementById("tombolAmbilData");
const quoteText = document.getElementById("quoteText");
const quoteAuthor = document.getElementById("quoteAuthor");

// LANGKAH 2: Pasang event listener — saat tombol diklik, jalankan fungsi
tombol.addEventListener("click", async function () {
  // Tampilkan loading
  quoteText.textContent = "Sedang memuat...";
  quoteAuthor.textContent = "";

  try {
    // LANGKAH 3: Ambil data dari API
    let response = await fetch("https://dummyjson.com/quotes/random");
    let data = await response.json();

    // LANGKAH 4: Tampilkan data ke halaman
    quoteText.textContent = `"${data.quote}"`;
    quoteAuthor.textContent = `— ${data.author}`;

    console.log("Quote berhasil diambil:", data);
  } catch (error) {
    // LANGKAH 5: Tangani error dengan pesan yang ramah
    quoteText.textContent = "Gagal mengambil quote. Coba lagi!";
    quoteAuthor.textContent = "";
    console.error("Error:", error);
  }
});
```

### 🔍 Alur Program:

```
Halaman dibuka
  → JavaScript mengambil referensi elemen (tombol, teks, author)
  → Menunggu pengguna klik tombol...

Pengguna klik "Ambil Quote Baru"
  → Tampilkan "Sedang memuat..."
  → Kirim request ke API (fetch)
  → Tunggu response dari server (await)
  → Ubah response menjadi JSON (await response.json())
  → Tampilkan quote dan author ke halaman
  → Jika gagal → tampilkan pesan error
```

---


# 🧠 Ringkasan

| BAB | Topik | Poin Utama |
|-----|-------|------------|
| 1 | Apa itu JavaScript? | Membuat web interaktif; berjalan di browser |
| 2 | Menambahkan JS ke HTML | File eksternal (`.js`), letakkan sebelum `</body>` |
| 3 | Output | `console.log()` untuk debugging, `alert()` untuk notifikasi |
| 4 | Variabel & Tipe Data | `let`/`const`; string, number, boolean, array, object |
| 5 | Operator | Aritmatika, perbandingan (`===`), logika (`&&`, `\|\|`) |
| 6 | Struktur Kontrol | `if/else` untuk percabangan, `for/while` untuk perulangan |
| 7 | Fungsi | Blok kode reusable; parameter & return |
| 8 | DOM Manipulation | Akses elemen, ubah konten/style, event handling |
| 9 | Fetch API | Mengambil data dari server; `async/await` |
