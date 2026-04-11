# 📦 MODUL 4: Pengantar JavaScript & Sintaks Dasar

---

## 🎯 Tujuan Pembelajaran

Setelah menyelesaikan modul ini, mahasiswa mampu:

- Memahami peran JavaScript dalam pengembangan website
- Menjelaskan cara kerja JavaScript di browser
- Menambahkan JavaScript ke dalam HTML
- Memahami dan menulis sintaks dasar JavaScript dengan benar
- Menggunakan variabel, operator, dan struktur kontrol
- Membuat fungsi sederhana
- Memanipulasi DOM untuk interaksi web
- Mengambil data dari server menggunakan Fetch API

---


# BAB 1 — Apa itu JavaScript?

Setelah Anda memahami HTML (struktur) dan CSS (tampilan), langkah berikutnya adalah membuat website menjadi **hidup dan interaktif**. Di sinilah JavaScript berperan.

**JavaScript (JS)** adalah bahasa pemrograman tingkat tinggi yang berjalan di dalam browser (Chrome, Firefox, Safari, Edge) dan digunakan untuk mengontrol perilaku halaman web. JavaScript awalnya diciptakan oleh **Brendan Eich** pada tahun 1995 untuk browser Netscape Navigator, dan kini telah menjadi salah satu bahasa pemrograman paling populer di dunia.

### 🔍 Analogi Sederhana

Bayangkan Anda membangun sebuah rumah:

| Komponen | Analogi | Peran |
|----------|---------|-------|
| **HTML** | Rangka & struktur bangunan | Mendefinisikan konten dan elemen halaman |
| **CSS** | Cat, warna, dekorasi | Mengatur tampilan visual |
| **JavaScript** | Listrik, saklar, sistem otomatis | Menambahkan perilaku dan interaksi |

Tanpa JavaScript, website hanya bisa ditampilkan secara **statis** — seperti poster digital. Dengan JavaScript, website bisa:

- ✅ Merespons klik tombol
- ✅ Memvalidasi input pengguna (form)
- ✅ Mengubah tampilan secara real-time tanpa reload
- ✅ Mengambil data dari server (AJAX/Fetch)
- ✅ Membuat animasi dan transisi
- ✅ Menyimpan data di browser (LocalStorage)

### 🌍 Di Mana JavaScript Digunakan?

JavaScript tidak hanya untuk browser. Saat ini JavaScript juga digunakan di:

- **Frontend Web** — React, Vue, Angular
- **Backend Server** — Node.js, Deno
- **Mobile App** — React Native, Ionic
- **Desktop App** — Electron
- **Game Development** — Phaser, Three.js

> 💡 Untuk modul ini, kita fokus pada penggunaan JavaScript di **browser (client-side)**.

---


# BAB 2 — Bagaimana Cara Kerja JavaScript?

JavaScript berjalan di **browser pengguna (client-side)**. Setiap browser modern memiliki **JavaScript Engine** yang bertugas membaca dan mengeksekusi kode JavaScript:

| Browser | JavaScript Engine |
|---------|-------------------|
| Chrome | V8 |
| Firefox | SpiderMonkey |
| Safari | JavaScriptCore |
| Edge | V8 (berbasis Chromium) |

### 🔄 Alur Eksekusi di Browser

Ketika pengguna membuka sebuah website, proses yang terjadi adalah:

```
1. Browser MEMBACA file HTML
   ↓
2. Browser MENERAPKAN CSS (styling)
   ↓
3. Browser membangun DOM (Document Object Model)
   ↓
4. Browser MENGEKSEKUSI JavaScript
   ↓
5. JavaScript MEMANIPULASI DOM berdasarkan logika program
```

### 🧩 Apa yang Bisa Dilakukan JavaScript di Browser?

JavaScript dapat:

1. **Mengakses dan memodifikasi HTML** melalui **DOM (Document Object Model)** — DOM adalah representasi struktur HTML dalam bentuk objek yang bisa diakses oleh JavaScript.
2. **Mendengarkan aksi pengguna** — klik, input keyboard, scroll, hover, submit form, dll.
3. **Berkomunikasi dengan server** — mengambil atau mengirim data melalui Fetch API tanpa harus me-reload halaman (konsep AJAX).
4. **Memanipulasi style CSS** — mengubah warna, ukuran, visibilitas elemen secara dinamis.
5. **Menyimpan data lokal** — menggunakan LocalStorage, SessionStorage, atau Cookie.

---


# BAB 3 — Cara Menambahkan JavaScript ke HTML

Ada tiga cara menambahkan JavaScript ke HTML. Cara terbaik dan yang **direkomendasikan** adalah menggunakan **file eksternal**.

### 📋 Perbandingan 3 Cara

| Cara | Contoh | Keterangan |
|------|--------|------------|
| **Inline** | `<button onclick="alert('Halo')">` | Langsung di atribut HTML. ❌ Tidak disarankan |
| **Internal** | `<script>console.log("Halo")</script>` | Di dalam tag `<script>` di file HTML. ⚠️ Untuk kode kecil |
| **Eksternal** | `<script src="script.js"></script>` | File terpisah. ✅ **Direkomendasikan** |

### 📁 Struktur File yang Disarankan

```
project/
├── index.html
├── style.css
└── script.js
```

### 🔗 Menghubungkan JS Eksternal ke HTML

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

  <!-- Letakkan script SEBELUM </body> -->
  <script src="script.js"></script>
</body>
</html>
```

> ⚠️ **Mengapa script diletakkan sebelum `</body>`?**
> - Agar seluruh elemen HTML selesai dimuat terlebih dahulu sebelum JavaScript dieksekusi.
> - Jika script diletakkan di `<head>`, JavaScript mungkin tidak bisa mengakses elemen HTML karena belum terbentuk saat script dijalankan.
> - Alternatif lain: gunakan atribut `defer` → `<script src="script.js" defer></script>` di `<head>`.

### 🔑 Perbedaan `defer` vs `async`

| Atribut | Kapan Dijalankan | Urutan Terjaga? |
|---------|------------------|-----------------|
| Tanpa atribut | Langsung saat ditemui, memblokir rendering | Ya |
| `defer` | Setelah HTML selesai di-parse | Ya |
| `async` | Segera setelah file selesai diunduh | Tidak |

---


# BAB 4 — Output Dasar (Console & Alert)

Untuk melihat hasil kode JavaScript dan melakukan debugging, ada beberapa cara menampilkan output:

### 1. `console.log()` — Menampilkan ke Console Browser

```javascript
console.log("Halo Dunia!");          // Menampilkan teks
console.log(42);                     // Menampilkan angka
console.log(true);                   // Menampilkan boolean
console.log("Nama:", "Budi", 20);   // Multiple argument
```

> 💡 **Cara membuka Console:**
> Klik kanan pada halaman → *Inspect* → pilih tab **Console**, atau tekan `F12` / `Ctrl + Shift + J`.

### 2. `alert()` — Menampilkan Pop-up Dialog

```javascript
alert("Selamat datang di website kami!");
```

Pop-up ini akan menghentikan eksekusi kode sampai pengguna menekan "OK".

### 3. `document.write()` — Menulis Langsung ke Halaman (Hindari!)

```javascript
document.write("Halo Dunia!"); // ❌ Tidak disarankan untuk produksi
```

### 4. Variasi Console Lainnya

```javascript
console.log("Info biasa");       // ℹ️ Pesan informasi
console.warn("Peringatan!");     // ⚠️ Pesan peringatan (kuning)
console.error("Terjadi error!"); // ❌ Pesan error (merah)
console.table([1, 2, 3]);       // 📊 Menampilkan data dalam tabel
```

---


# BAB 5 — Sintaks Dasar JavaScript

Sintaks adalah **aturan cara menulis kode** agar bisa dipahami dan dieksekusi oleh JavaScript engine. Memahami sintaks dasar adalah fondasi sebelum menulis program yang lebih kompleks.

---

## 5.1 Statement & Semicolon

**Statement** adalah satu instruksi/perintah dalam JavaScript. Setiap statement menjalankan satu aksi tertentu.

```javascript
console.log("Halo");   // Statement 1
let x = 10;            // Statement 2
x = x + 5;             // Statement 3
```

Setiap statement diakhiri dengan **semicolon (`;`)**. Meskipun JavaScript memiliki fitur **Automatic Semicolon Insertion (ASI)** yang bisa menambahkan semicolon secara otomatis, fitur ini **tidak selalu aman**.

#### ❌ Contoh Masalah Tanpa Semicolon:

```javascript
let a = 5
let b = 10
[a, b].forEach(console.log)
```

JavaScript bisa salah menginterpretasi baris ke-2 dan ke-3 menjadi satu statement:

```javascript
let b = 10[a, b].forEach(console.log) // ERROR!
```

> ⚠️ **Best Practice:** Selalu tulis semicolon (`;`) di akhir setiap statement untuk menghindari bug yang sulit dilacak.

---

## 5.2 Comments (Komentar)

Komentar adalah teks yang **tidak dieksekusi** oleh JavaScript. Komentar penting untuk:

- 📝 Menjelaskan logika kode yang kompleks
- 🔇 Menonaktifkan sementara baris kode (debugging)
- 📖 Membuat dokumentasi inline

#### a. Single-line Comment (Komentar satu baris)

```javascript
// Ini komentar satu baris
let nama = "Budi"; // Variabel untuk menyimpan nama pengguna
```

#### b. Multi-line Comment (Komentar lebih dari satu baris)

```javascript
/*
  Fungsi ini menghitung total harga
  setelah dikurangi diskon.
  Parameter: harga (number), diskon (number)
*/
function hitungTotal(harga, diskon) {
  return harga - (harga * diskon / 100);
}
```

> 💡 **Best Practice:** Gunakan komentar untuk menjelaskan **"mengapa"** suatu kode ditulis, bukan hanya **"apa"** yang dilakukan kode tersebut.

```javascript
// ❌ Komentar buruk:
let x = x + 1; // menambah x dengan 1

// ✅ Komentar baik:
let x = x + 1; // Increment counter untuk tracking jumlah klik pengguna
```

---

## 5.3 Case-Sensitive & Naming Convention

JavaScript bersifat **case-sensitive**, artinya huruf besar dan kecil dianggap sebagai karakter yang **berbeda**.

```javascript
let nama = "Budi";
let Nama = "Andi";   // Ini VARIABEL BERBEDA dari 'nama'
let NAMA = "Citra";  // Ini juga VARIABEL BERBEDA

console.log(nama);   // "Budi"
console.log(Nama);   // "Andi"
console.log(NAMA);   // "Citra"
```

### 📛 Naming Convention (Aturan Penamaan)

| Gaya | Format | Digunakan Untuk | Contoh |
|------|--------|-----------------|--------|
| **camelCase** | hurufKecilDiAwal | Variabel & fungsi | `namaLengkap`, `hitungTotal()` |
| **PascalCase** | HurufBesarDiAwal | Class & Constructor | `Mahasiswa`, `DataPengguna` |
| **UPPER_SNAKE_CASE** | HURUF_BESAR_SEMUA | Konstanta global | `MAX_RETRY`, `API_URL` |

#### ✅ Aturan Penamaan Variabel yang Valid:

```javascript
let namaLengkap;        // ✅ camelCase — disarankan
let total_harga;        // ✅ snake_case — valid tapi tidak lazim di JS
let _private;           // ✅ diawali underscore — konvensi untuk "private"
let $element;           // ✅ diawali dollar — sering di library seperti jQuery
```

#### ❌ Aturan Penamaan yang TIDAK Valid:

```javascript
let 1data;              // ❌ Tidak boleh diawali angka
let nama lengkap;       // ❌ Tidak boleh ada spasi
let function;           // ❌ Tidak boleh menggunakan keyword JavaScript
let for;                // ❌ Keyword JavaScript
```

> 💡 **Tips:** Gunakan nama yang **deskriptif dan jelas**. Lebih baik panjang tapi jelas daripada pendek tapi membingungkan.
> ```javascript
> let x;                // ❌ Buruk — tidak jelas apa isinya
> let jumlahMahasiswa;  // ✅ Baik — langsung paham tujuannya
> ```

---

## 5.4 Whitespace & Formatting

Whitespace adalah spasi, tab, atau baris kosong dalam kode. JavaScript **mengabaikan whitespace berlebih** dalam eksekusi, tetapi formatting yang baik **sangat penting** untuk keterbacaan kode oleh manusia.

#### ❌ Contoh Buruk (sulit dibaca):

```javascript
if(x>10){console.log("besar");let y=x*2;return y;}
```

#### ✅ Contoh Baik (mudah dibaca):

```javascript
if (x > 10) {
  console.log("besar");
  let y = x * 2;
  return y;
}
```

### 📏 Prinsip Formatting yang Baik:

1. **Gunakan indentasi konsisten** — 2 spasi atau 4 spasi (pilih salah satu, jangan campur!)
2. **Beri spasi di sekitar operator** — `x = 10` bukan `x=10`
3. **Beri spasi setelah keyword** — `if (kondisi)` bukan `if(kondisi)`
4. **Pisahkan blok kode dengan baris kosong** untuk memisahkan logika
5. **Konsisten dalam gaya penulisan** sepanjang proyek

> 💡 **Tips:** Gunakan tools seperti **Prettier** (extension VS Code) untuk otomatis merapikan kode sesuai standar industri.

---


# BAB 6 — Variabel & Tipe Data

Variabel adalah **wadah untuk menyimpan data** yang akan digunakan dalam program. Tipe data menentukan **jenis nilai** yang disimpan dalam variabel.

---

## 6.1 Deklarasi Variabel: `var` vs `let` vs `const`

JavaScript memiliki tiga cara untuk mendeklarasikan variabel:

```javascript
var nama = "Budi";    // Cara lama (ES5) — hindari penggunaannya
let umur = 20;        // Bisa diubah nilainya (ES6+)
const PI = 3.14;      // Tidak bisa diubah nilainya (ES6+)
```

### 📊 Perbandingan Lengkap

| Fitur | `var` | `let` | `const` |
|-------|-------|-------|---------|
| Scope | Function scope | Block scope | Block scope |
| Bisa di-reassign? | ✅ Ya | ✅ Ya | ❌ Tidak |
| Bisa di-redeclare? | ✅ Ya | ❌ Tidak | ❌ Tidak |
| Hoisting? | ✅ Ya (nilai `undefined`) | ✅ Ya (tapi TDZ*) | ✅ Ya (tapi TDZ*) |

> *TDZ = Temporal Dead Zone — variabel sudah ter-hoist tapi belum bisa diakses sampai baris deklarasinya.

### Contoh Perbedaan Scope

```javascript
// var — function scope (bisa diakses di luar blok if)
if (true) {
  var x = 10;
}
console.log(x); // 10 ✅ (tapi ini bisa berbahaya!)

// let — block scope (hanya bisa diakses di dalam blok if)
if (true) {
  let y = 20;
}
console.log(y); // ❌ ReferenceError: y is not defined
```

> ⚠️ **Rekomendasi Modern:**
> - Gunakan `const` **sebagai default** — untuk nilai yang tidak berubah.
> - Gunakan `let` jika nilai **perlu diubah**.
> - **Jangan gunakan `var`** — sudah dianggap usang di JavaScript modern.

---

## 6.2 Tipe Data Primitif

Tipe data primitif adalah tipe data dasar yang menyimpan **satu nilai** dan bersifat **immutable** (tidak bisa diubah secara langsung).

```javascript
// 1. String — teks
let teks = "Halo Dunia";         // double quote
let teks2 = 'Halo Dunia';       // single quote
let teks3 = `Halo ${nama}`;     // template literal (ES6) — bisa menyisipkan variabel

// 2. Number — angka (integer & desimal)
let bulat = 42;
let desimal = 3.14;
let negatif = -7;

// 3. Boolean — benar atau salah
let sudahLogin = true;
let isAdmin = false;

// 4. null — nilai "kosong" yang disengaja
let data = null;  // Kita secara eksplisit menyatakan "belum ada data"

// 5. undefined — variabel dideklarasikan tapi belum diberi nilai
let hasil;
console.log(hasil); // undefined

// 6. BigInt — angka sangat besar (ES2020)
let angkaBesar = 9007199254740991n;

// 7. Symbol — identifier unik (ES6)
let id = Symbol("id");
```

### 🔍 Perbedaan `null` vs `undefined`

| | `null` | `undefined` |
|-|--------|-------------|
| **Arti** | Sengaja dikosongkan | Belum diberi nilai |
| **Siapa yang set?** | Programmer | JavaScript |
| **typeof** | `"object"` (bug lama JS) | `"undefined"` |

---

## 6.3 Tipe Data Reference (Non-Primitif)

Tipe data reference menyimpan **referensi ke lokasi memori**, bukan nilai langsung. Ini mencakup Array, Object, dan Function.

### Array — Kumpulan Data Berurutan

```javascript
let buah = ["Apel", "Mangga", "Jeruk"];

console.log(buah[0]);     // "Apel" — index dimulai dari 0
console.log(buah.length); // 3

buah.push("Anggur");      // Menambah di akhir
buah.pop();               // Menghapus dari akhir
```

### Object — Kumpulan Data dengan Key-Value

```javascript
let mahasiswa = {
  nama: "Siti Aminah",
  umur: 20,
  jurusan: "Teknik Informatika",
  aktif: true
};

console.log(mahasiswa.nama);      // "Siti Aminah" — dot notation
console.log(mahasiswa["umur"]);   // 20 — bracket notation
```

### Function — Blok Kode yang Dapat Dipanggil

```javascript
function sapa(nama) {
  return "Halo, " + nama + "!";
}

console.log(sapa("Budi")); // "Halo, Budi!"
```

---

## 6.4 Type Checking & Type Coercion

### Mengecek Tipe Data dengan `typeof`

```javascript
typeof "Halo";     // "string"
typeof 42;         // "number"
typeof true;       // "boolean"
typeof undefined;  // "undefined"
typeof null;       // "object"  ⚠️ Bug lama JavaScript!
typeof [1, 2, 3];  // "object"  ⚠️ Array dianggap object
typeof {};         // "object"
```

> 💡 Untuk mengecek array, gunakan `Array.isArray([1,2,3])` → `true`

### Loose vs Strict Equality

```javascript
// == (Loose Equality) — membandingkan NILAI saja, tipe data bisa dikonversi
5 == "5"      // true  ⚠️ (string "5" dikonversi ke number 5)
0 == false    // true  ⚠️
null == undefined // true ⚠️

// === (Strict Equality) — membandingkan NILAI DAN TIPE DATA
5 === "5"     // false ✅ (tipe berbeda: number vs string)
0 === false   // false ✅
null === undefined // false ✅
```

> ⚠️ **Best Practice:** Selalu gunakan `===` (strict equality) untuk menghindari bug akibat type coercion yang tidak terduga.

---


# BAB 7 — Operator

Operator adalah simbol yang digunakan untuk melakukan **operasi** pada nilai/variabel. JavaScript memiliki berbagai jenis operator.

---

## 7.1 Operator Aritmatika

Digunakan untuk perhitungan matematika.

```javascript
let a = 10, b = 3;

console.log(a + b);   // 13  — Penjumlahan
console.log(a - b);   // 7   — Pengurangan
console.log(a * b);   // 30  — Perkalian
console.log(a / b);   // 3.33 — Pembagian
console.log(a % b);   // 1   — Modulus (sisa bagi)
console.log(a ** b);  // 1000 — Pangkat (10³)

// Increment & Decrement
let x = 5;
x++;  // x = 6 (increment: tambah 1)
x--;  // x = 5 (decrement: kurang 1)
```

### ⚠️ Hati-hati dengan String + Number

```javascript
console.log("5" + 3);   // "53"  — string concatenation, bukan penjumlahan!
console.log("5" - 3);   // 2     — string dikonversi ke number
console.log("5" * 2);   // 10    — string dikonversi ke number
```

---

## 7.2 Operator Assignment (Penugasan)

Digunakan untuk memberikan atau memperbarui nilai variabel.

```javascript
let x = 10;     // Assignment dasar

x += 5;         // x = x + 5  → 15
x -= 2;         // x = x - 2  → 13
x *= 3;         // x = x * 3  → 39
x /= 3;         // x = x / 3  → 13
x %= 5;         // x = x % 5  → 3
x **= 2;        // x = x ** 2 → 9
```

---

## 7.3 Operator Perbandingan

Mengembalikan nilai **boolean** (`true` / `false`).

```javascript
let a = 10, b = 5;

a == b       // false — sama nilainya?
a === b      // false — sama nilai DAN tipenya?
a != b       // true  — tidak sama nilainya?
a !== b      // true  — tidak sama nilai ATAU tipenya?
a > b        // true  — lebih besar?
a < b        // false — lebih kecil?
a >= b       // true  — lebih besar atau sama?
a <= b       // false — lebih kecil atau sama?
```

---

## 7.4 Operator Logika

Digunakan untuk menggabungkan beberapa kondisi.

```javascript
let umur = 20;
let punyaKTP = true;

// AND (&&) — kedua kondisi harus true
umur >= 17 && punyaKTP    // true

// OR (||) — salah satu kondisi true sudah cukup
umur >= 17 || punyaKTP    // true

// NOT (!) — membalik nilai boolean
!true                     // false
!false                    // true

// Nullish Coalescing (??) — gunakan nilai default jika null/undefined (ES2020)
let nama = null;
let tampilkan = nama ?? "Anonim";   // "Anonim"

// Optional Chaining (?.) — akses properti tanpa error jika null/undefined (ES2020)
let user = null;
console.log(user?.nama);            // undefined (bukan error!)
```

---

## 7.5 Operator Ternary

Shorthand untuk `if-else` sederhana. Format: `kondisi ? nilaiJikaTrue : nilaiJikaFalse`

```javascript
let nilai = 85;
let status = nilai >= 70 ? "Lulus" : "Tidak Lulus";

console.log(status); // "Lulus"

// Setara dengan:
let status2;
if (nilai >= 70) {
  status2 = "Lulus";
} else {
  status2 = "Tidak Lulus";
}
```

---


# BAB 8 — Struktur Kontrol

Struktur kontrol mengatur **alur eksekusi** program. Tanpa struktur kontrol, kode hanya akan dieksekusi dari atas ke bawah secara linear.

---

## 8.1 Percabangan (If / Else If / Else)

Digunakan untuk menjalankan kode berdasarkan **kondisi** tertentu.

```javascript
let nilai = 85;

if (nilai >= 90) {
  console.log("Grade: A");
} else if (nilai >= 80) {
  console.log("Grade: B");  // ← Ini yang akan dijalankan
} else if (nilai >= 70) {
  console.log("Grade: C");
} else {
  console.log("Grade: D");
}
```

### Alur Logika:

```
nilai = 85
  → Apakah >= 90? TIDAK
  → Apakah >= 80? YA → cetak "Grade: B" → selesai
```

---

## 8.2 Switch-Case

Alternatif `if-else` yang lebih rapi untuk membandingkan **satu variabel** dengan **banyak kemungkinan nilai**.

```javascript
let hari = "Senin";

switch (hari) {
  case "Senin":
    console.log("Semangat awal minggu!");
    break;  // ← PENTING! Tanpa break, eksekusi akan "jatuh" ke case berikutnya
  case "Jumat":
    console.log("Sudah hampir weekend!");
    break;
  case "Sabtu":
  case "Minggu":
    console.log("Akhir pekan, istirahat!");  // Dua case dengan aksi yang sama
    break;
  default:
    console.log("Hari biasa.");
}
```

> ⚠️ **Jangan lupa `break`!** Tanpa `break`, JavaScript akan terus mengeksekusi case berikutnya (fall-through behavior).

---

## 8.3 Perulangan (Looping)

Digunakan untuk menjalankan blok kode **berulang kali**.

### a. `for` — Ketika jumlah pengulangan diketahui

```javascript
// Cetak angka 1 sampai 5
for (let i = 1; i <= 5; i++) {
  console.log("Angka:", i);
}
// Output: Angka: 1, Angka: 2, Angka: 3, Angka: 4, Angka: 5
```

**Anatomi `for` loop:**
- `let i = 1` → **inisialisasi** (dijalankan sekali di awal)
- `i <= 5` → **kondisi** (dicek sebelum setiap iterasi)
- `i++` → **increment** (dijalankan setelah setiap iterasi)

### b. `while` — Ketika jumlah pengulangan belum diketahui

```javascript
let count = 0;

while (count < 3) {
  console.log("Count:", count);
  count++;  // PENTING! Tanpa ini, loop akan berjalan selamanya (infinite loop)
}
// Output: Count: 0, Count: 1, Count: 2
```

### c. `do...while` — Minimal dijalankan satu kali

```javascript
let angka = 10;

do {
  console.log("Angka:", angka);  // Tetap dijalankan sekali meskipun kondisi false
  angka++;
} while (angka < 5);

// Output: Angka: 10 (karena kode dalam do{} dijalankan dulu, baru cek kondisi)
```

---

## 8.4 Loop Helpers: `break` & `continue`

```javascript
// break — menghentikan loop sepenuhnya
for (let i = 1; i <= 10; i++) {
  if (i === 5) break;
  console.log(i);
}
// Output: 1, 2, 3, 4

// continue — melewati iterasi saat ini dan lanjut ke iterasi berikutnya
for (let i = 1; i <= 5; i++) {
  if (i === 3) continue;
  console.log(i);
}
// Output: 1, 2, 4, 5 (angka 3 dilewati)
```

---

## 8.5 Array Methods untuk Looping

Method-method bawaan array yang lebih modern dan ekspresif dibanding `for` loop biasa.

```javascript
let angka = [1, 2, 3, 4, 5];

// forEach — menjalankan fungsi untuk setiap elemen (tidak mengembalikan array baru)
angka.forEach(function(item) {
  console.log(item * 2);
});
// Output: 2, 4, 6, 8, 10

// map — membuat array BARU berdasarkan transformasi setiap elemen
let kaliDua = angka.map(item => item * 2);
console.log(kaliDua); // [2, 4, 6, 8, 10]

// filter — membuat array BARU berisi elemen yang lolos kondisi
let genap = angka.filter(item => item % 2 === 0);
console.log(genap); // [2, 4]

// find — mencari elemen PERTAMA yang memenuhi kondisi
let pertama = angka.find(item => item > 3);
console.log(pertama); // 4

// reduce — mengakumulasi semua elemen menjadi satu nilai
let total = angka.reduce((akumulator, item) => akumulator + item, 0);
console.log(total); // 15
```

---


# BAB 9 — Fungsi (Function)

Fungsi adalah **blok kode yang dapat digunakan ulang** (reusable). Fungsi membantu memecah program menjadi bagian-bagian kecil yang lebih mudah dikelola dan di-debug.

---

## 9.1 Tiga Cara Mendefinisikan Fungsi

### a. Function Declaration

```javascript
function sapa(nama) {
  return "Halo, " + nama + "!";
}

console.log(sapa("Budi")); // "Halo, Budi!"
```

> 💡 Function declaration bisa dipanggil **sebelum** dideklarasikan (hoisting).

### b. Function Expression

```javascript
const sapa = function(nama) {
  return "Halo, " + nama + "!";
};

console.log(sapa("Andi")); // "Halo, Andi!"
```

> ⚠️ Function expression **tidak** bisa dipanggil sebelum dideklarasikan.

### c. Arrow Function (ES6+)

```javascript
const sapa = (nama) => {
  return "Halo, " + nama + "!";
};

// Versi singkat (jika hanya satu statement return):
const sapa2 = (nama) => "Halo, " + nama + "!";

// Tanpa parameter:
const sapaSemua = () => "Halo semua!";

// Satu parameter (kurung bisa dihilangkan):
const kuadrat = x => x * x;
```

---

## 9.2 Parameter & Argument

- **Parameter** = variabel yang diterima fungsi (saat mendefinisikan)
- **Argument** = nilai yang dikirim ke fungsi (saat memanggil)

```javascript
//          parameter ↓   ↓
function tambah(a, b) {
  return a + b;
}

//         argument ↓  ↓
tambah(5, 3);  // 8
```

### Default Parameter (ES6+)

```javascript
function sapa(nama = "Tamu") {
  return "Halo, " + nama + "!";
}

sapa();       // "Halo, Tamu!"    — menggunakan default
sapa("Budi"); // "Halo, Budi!"   — menggunakan argument
```

### Rest Parameter (`...args`)

Menampung jumlah argument yang tidak terbatas ke dalam array.

```javascript
function jumlahkan(...angka) {
  return angka.reduce((total, n) => total + n, 0);
}

jumlahkan(1, 2, 3);       // 6
jumlahkan(10, 20, 30, 40); // 100
```

---

## 9.3 Return Value

Fungsi bisa mengembalikan nilai menggunakan `return`. Setelah `return`, eksekusi fungsi **berhenti**.

```javascript
function hitungLuas(panjang, lebar) {
  return panjang * lebar; // Mengembalikan hasil ke pemanggil
  console.log("Ini tidak akan dieksekusi"); // ← Dead code
}

let luas = hitungLuas(5, 3); // luas = 15
```

### Arrow Function: Implicit Return

Jika arrow function hanya punya satu expression, `return` bisa dihilangkan:

```javascript
// Explicit return (dengan kurung kurawal)
const tambah = (a, b) => { return a + b; };

// Implicit return (tanpa kurung kurawal)
const tambah2 = (a, b) => a + b;

// Keduanya menghasilkan hal yang sama
```

---

## 9.4 Scope (Cakupan Variabel)

Scope menentukan **di mana variabel bisa diakses** dalam program.

```javascript
// 1. Global Scope — bisa diakses dari mana saja
let globalVar = "Saya global";

function contoh() {
  // 2. Function Scope — hanya bisa diakses di dalam fungsi ini
  let functionVar = "Saya di dalam fungsi";

  if (true) {
    // 3. Block Scope — hanya bisa diakses di dalam blok {} ini
    let blockVar = "Saya di dalam block";
    console.log(globalVar);   // ✅ Bisa akses
    console.log(functionVar); // ✅ Bisa akses
    console.log(blockVar);    // ✅ Bisa akses
  }

  console.log(globalVar);    // ✅ Bisa akses
  console.log(functionVar);  // ✅ Bisa akses
  // console.log(blockVar);  // ❌ Error — di luar block scope
}

console.log(globalVar);      // ✅ Bisa akses
// console.log(functionVar); // ❌ Error — di luar function scope
```

> 💡 **Prinsip:** Variabel sebaiknya dideklarasikan di scope **sekecil mungkin** untuk menghindari konflik nama dan bug yang sulit dilacak.

---


# BAB 10 — DOM Manipulation

**DOM (Document Object Model)** adalah representasi struktur HTML dalam bentuk **pohon objek (tree)** yang bisa diakses dan dimanipulasi oleh JavaScript. DOM adalah **jembatan** antara JavaScript dan tampilan halaman web.

```
document
  └── html
      ├── head
      │   └── title
      └── body
          ├── h1
          ├── p
          └── button
```

---

## 10.1 Mengakses Elemen (Selektor)

Langkah pertama manipulasi DOM adalah **memilih elemen** yang ingin diubah.

```javascript
// Berdasarkan ID — mengembalikan SATU elemen
let judul = document.getElementById("judul");

// Berdasarkan CSS Selector — mengembalikan elemen PERTAMA yang cocok
let tombol = document.querySelector(".btn-utama");

// Berdasarkan CSS Selector — mengembalikan SEMUA elemen yang cocok (NodeList)
let items = document.querySelectorAll(".item");

// Berdasarkan nama tag
let paragraf = document.getElementsByTagName("p");

// Berdasarkan nama class
let aktif = document.getElementsByClassName("aktif");
```

> 💡 **Rekomendasi:** Gunakan `querySelector()` dan `querySelectorAll()` karena lebih fleksibel — bisa menggunakan CSS selector apapun.

---

## 10.2 Mengubah Konten Elemen

```html
<p id="pesan">Teks awal</p>
```

```javascript
let el = document.getElementById("pesan");

// textContent — mengubah teks saja (AMAN dari XSS)
el.textContent = "Teks baru yang aman";

// innerText — mirip textContent, tapi memperhatikan CSS (elemen hidden tidak ditampilkan)
el.innerText = "Teks yang terlihat saja";

// innerHTML — mengubah konten HTML (HATI-HATI! Bisa menyisipkan tag HTML)
el.innerHTML = "<strong>Teks tebal</strong> dan <em>miring</em>";
```

> ⚠️ **Peringatan Keamanan:** Jangan gunakan `innerHTML` dengan data dari pengguna tanpa sanitasi! Ini bisa menyebabkan serangan **XSS (Cross-Site Scripting)**.

---

## 10.3 Mengubah Style & Class

```javascript
let el = document.getElementById("kotak");

// Mengubah style inline langsung
el.style.color = "red";
el.style.backgroundColor = "lightblue";  // Perhatikan: camelCase, bukan kebab-case!
el.style.fontSize = "20px";
el.style.display = "none";  // Menyembunyikan elemen

// Mengubah class (LEBIH DISARANKAN — memisahkan logika dan styling)
el.classList.add("aktif");        // Menambah class
el.classList.remove("aktif");     // Menghapus class
el.classList.toggle("aktif");     // Toggle: tambah jika belum ada, hapus jika sudah ada
el.classList.contains("aktif");   // Cek apakah class ada → true/false
```

> 💡 **Best Practice:** Sebisa mungkin gunakan `classList` untuk mengubah tampilan, bukan `style` langsung. Ini menjaga prinsip **separation of concerns** (CSS untuk styling, JS untuk logic).

---

## 10.4 Membuat & Menghapus Elemen

```javascript
// MEMBUAT elemen baru
let elBaru = document.createElement("div");
elBaru.textContent = "Saya elemen baru!";
elBaru.classList.add("card");
elBaru.setAttribute("id", "card-1");

// MENAMBAHKAN ke DOM
let container = document.getElementById("container");
container.appendChild(elBaru);      // Menambahkan di akhir container
container.prepend(elBaru);          // Menambahkan di awal container
container.insertBefore(elBaru, referensiElemen); // Menambahkan sebelum elemen tertentu

// MENGHAPUS elemen
elBaru.remove();                    // Menghapus elemen dari DOM (modern)
container.removeChild(elBaru);      // Cara lama
```

---

## 10.5 Event Handling

Event adalah **aksi yang terjadi di halaman web** — klik, ketik, scroll, hover, dll. JavaScript bisa **mendengarkan** event ini dan menjalankan kode sebagai respons.

```javascript
let tombol = document.getElementById("tombolKlik");

// addEventListener — cara TERBAIK menambahkan event
tombol.addEventListener("click", function() {
  console.log("Tombol diklik!");
});

// Dengan arrow function
tombol.addEventListener("click", () => {
  console.log("Tombol diklik!");
});

// Dengan fungsi terpisah (lebih rapi untuk logika kompleks)
function handleKlik() {
  console.log("Tombol diklik!");
}
tombol.addEventListener("click", handleKlik);
```

### 📋 Event yang Sering Digunakan

| Event | Kapan Terjadi |
|-------|---------------|
| `click` | Elemen di-klik |
| `dblclick` | Elemen di-double-click |
| `mouseover` | Mouse masuk area elemen |
| `mouseout` | Mouse keluar area elemen |
| `keydown` | Tombol keyboard ditekan |
| `keyup` | Tombol keyboard dilepas |
| `input` | Nilai input berubah |
| `change` | Input selesai diubah (kehilangan focus) |
| `submit` | Form di-submit |
| `load` | Halaman selesai dimuat |

### Event Object

Setiap event handler menerima **event object** yang berisi informasi tentang event tersebut.

```javascript
tombol.addEventListener("click", function(event) {
  console.log(event.type);    // "click"
  console.log(event.target);  // elemen yang diklik
  event.preventDefault();     // mencegah perilaku default (misal: submit form)
});
```

---


# BAB 11 — Asynchronous JavaScript

Secara default, JavaScript menjalankan kode secara **synchronous** — satu baris per satu baris, berurutan. Namun, beberapa operasi membutuhkan waktu (mengambil data dari server, membaca file, timer), dan kita tidak ingin **memblokir** eksekusi kode lainnya. Di sinilah **asynchronous programming** berperan.

---

## 11.1 Evolusi Async: Callback → Promise → Async/Await

### a. Callback (Cara Lama)

```javascript
function ambilData(callback) {
  setTimeout(function() {
    callback("Data berhasil diambil!");
  }, 2000);
}

ambilData(function(hasil) {
  console.log(hasil); // "Data berhasil diambil!" (setelah 2 detik)
});
```

> ⚠️ Masalah: Callback bersarang banyak menghasilkan **"Callback Hell"** yang sulit dibaca.

### b. Promise (ES6)

```javascript
let janji = new Promise(function(resolve, reject) {
  let berhasil = true;

  if (berhasil) {
    resolve("Data berhasil!");
  } else {
    reject("Terjadi error!");
  }
});

janji
  .then(hasil => console.log(hasil))   // Jika resolve
  .catch(error => console.log(error))  // Jika reject
  .finally(() => console.log("Selesai")); // Selalu dijalankan
```

### c. Async/Await (ES2017) — Cara Paling Modern & Mudah Dibaca

```javascript
async function ambilData() {
  try {
    let response = await fetch("https://api.example.com/data");
    let data = await response.json();
    console.log(data);
  } catch (error) {
    console.error("Error:", error);
  }
}

ambilData();
```

> 💡 `async/await` adalah **syntactic sugar** di atas Promise — kode terlihat seperti synchronous, tapi tetap non-blocking.

---

## 11.2 Fetch API

Fetch API adalah cara modern untuk **mengambil data dari server** (menggantikan XMLHttpRequest).

```javascript
// GET — Mengambil data
fetch("https://dummyjson.com/products/1")
  .then(response => response.json())    // Mengubah response ke JSON
  .then(data => {
    console.log(data.title);            // Menampilkan judul produk
    console.log(data.price);            // Menampilkan harga
  })
  .catch(error => console.error("Error:", error));

// Dengan async/await (LEBIH DISARANKAN):
async function ambilProduk() {
  try {
    let response = await fetch("https://dummyjson.com/products/1");
    let data = await response.json();
    console.log(data.title);
    console.log(data.price);
  } catch (error) {
    console.error("Error:", error);
  }
}
```

---

## 11.3 Error Handling (Try-Catch-Finally)

Digunakan untuk **menangani error** agar program tidak berhenti secara tiba-tiba.

```javascript
try {
  // Kode yang mungkin menghasilkan error
  let data = JSON.parse("ini bukan JSON");
} catch (error) {
  // Kode yang dijalankan JIKA terjadi error
  console.error("Terjadi error:", error.message);
} finally {
  // Kode yang SELALU dijalankan, error atau tidak
  console.log("Proses selesai.");
}
```

---

## 11.4 JSON (JavaScript Object Notation)

JSON adalah format data ringan yang digunakan untuk **pertukaran data** antara client dan server.

```javascript
// Object JavaScript → JSON String
let mahasiswa = { nama: "Budi", umur: 20 };
let jsonString = JSON.stringify(mahasiswa);
console.log(jsonString); // '{"nama":"Budi","umur":20}'

// JSON String → Object JavaScript
let objek = JSON.parse(jsonString);
console.log(objek.nama); // "Budi"
```

> 💡 **Fakta:** Meskipun namanya JavaScript Object Notation, JSON digunakan oleh **semua bahasa pemrograman** (Python, Java, PHP, dll.) sebagai format pertukaran data standar.

---


# BAB 12 — Storage & Utility

---

## 12.1 LocalStorage

LocalStorage memungkinkan penyimpanan data di **browser pengguna** secara persisten (data tetap ada meskipun browser ditutup).

```javascript
// Menyimpan data
localStorage.setItem("nama", "Budi");
localStorage.setItem("umur", "20");

// Mengambil data
let nama = localStorage.getItem("nama");
console.log(nama); // "Budi"

// Menghapus satu item
localStorage.removeItem("nama");

// Menghapus semua data
localStorage.clear();
```

### Menyimpan Object/Array di LocalStorage

LocalStorage hanya bisa menyimpan **string**. Untuk menyimpan object/array, gunakan JSON:

```javascript
// Menyimpan object
let user = { nama: "Budi", umur: 20 };
localStorage.setItem("user", JSON.stringify(user));

// Mengambil kembali
let data = JSON.parse(localStorage.getItem("user"));
console.log(data.nama); // "Budi"
```

> ⚠️ **Batasan LocalStorage:**
> - Maksimal **5-10 MB** per domain (tergantung browser)
> - Hanya bisa menyimpan **string**
> - **Tidak aman** untuk data sensitif (password, token)
> - Bersifat **synchronous** — bisa memperlambat jika data besar

---

## 12.2 Console Methods (Debugging Tools)

Console adalah **alat debugging utama** untuk developer JavaScript.

```javascript
// Pesan biasa
console.log("Info biasa");

// Pesan error (tampil merah)
console.error("Ada yang salah!");

// Pesan peringatan (tampil kuning)
console.warn("Hati-hati!");

// Menampilkan data dalam format tabel (sangat berguna untuk array/object)
let siswa = [
  { nama: "Budi", nilai: 90 },
  { nama: "Siti", nilai: 85 },
  { nama: "Andi", nilai: 78 }
];
console.table(siswa);

// Mengelompokkan log
console.group("Detail User");
console.log("Nama: Budi");
console.log("Umur: 20");
console.groupEnd();

// Mengukur waktu eksekusi
console.time("proses");
// ... kode yang ingin diukur ...
console.timeEnd("proses"); // Output: proses: 12.345ms
```

---


# 🧪 BAB 13 — Studi Kasus: Quote Generator

Studi kasus ini menggabungkan konsep **DOM Manipulation** dan **Fetch API** untuk membuat aplikasi sederhana yang mengambil kutipan acak dari internet dan menampilkannya di halaman web.

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
</head>
<body>

  <h1>Quote Generator</h1>
  <p id="quoteText">Klik tombol untuk mendapatkan quote!</p>
  <p id="quoteAuthor"></p>
  <button id="tombolAmbilData">Ambil Quote Baru</button>

  <script src="script.js"></script>
</body>
</html>
```

### `script.js`

```javascript
// 1. Ambil referensi elemen dari DOM
const tombol = document.getElementById("tombolAmbilData");
const quoteText = document.getElementById("quoteText");
const quoteAuthor = document.getElementById("quoteAuthor");

// 2. Pasang event listener pada tombol
tombol.addEventListener("click", async function() {
  try {
    // 3. Ambil data dari API
    let response = await fetch("https://dummyjson.com/quotes/random");
    let data = await response.json();

    // 4. Tampilkan data ke halaman
    quoteText.textContent = `"${data.quote}"`;
    quoteAuthor.textContent = `— ${data.author}`;

    console.log("Quote berhasil diambil:", data);
  } catch (error) {
    // 5. Tangani error
    quoteText.textContent = "Gagal mengambil quote. Coba lagi!";
    quoteAuthor.textContent = "";
    console.error("Error:", error);
  }
});
```

### 🔍 Penjelasan Alur Program:

1. **Seleksi elemen DOM** — menggunakan `getElementById` untuk mengambil referensi tombol dan paragraf.
2. **Pasang event listener** — mendengarkan event `click` pada tombol.
3. **Fetch API** — saat tombol diklik, mengirim request ke `https://dummyjson.com/quotes/random`.
4. **Parsing JSON** — mengubah response server menjadi object JavaScript.
5. **Update DOM** — menampilkan quote dan nama author ke elemen `<p>`.
6. **Error Handling** — jika terjadi error (misal: internet mati), tampilkan pesan error yang ramah.

---

# 🧠 Ringkasan Modul

| BAB | Topik | Poin Utama |
|-----|-------|------------|
| 1 | Apa itu JavaScript? | Membuat web interaktif; berjalan di browser |
| 2 | Cara Kerja JS | Client-side; dieksekusi setelah HTML & CSS |
| 3 | Menambahkan JS ke HTML | File eksternal sebelum `</body>` |
| 4 | Output Dasar | `console.log()`, `alert()` |
| 5 | Sintaks Dasar | Statement, komentar, case-sensitive, formatting |
| 6 | Variabel & Tipe Data | `let`, `const`; primitif vs reference |
| 7 | Operator | Aritmatika, assignment, perbandingan, logika, ternary |
| 8 | Struktur Kontrol | if/else, switch, for, while, array methods |
| 9 | Fungsi | Declaration, expression, arrow, scope |
| 10 | DOM Manipulation | Selektor, ubah konten/style, event handling |
| 11 | Asynchronous JS | Promise, async/await, Fetch API, JSON |
| 12 | Storage & Utility | LocalStorage, console methods |
| 13 | Studi Kasus | Quote Generator (DOM + Fetch API) |

---

# 🎯 Tugas Mandiri

Kerjakan tugas berikut untuk menguji pemahaman Anda:

1. **Tombol Ganti Warna** — Buat tombol yang mengubah warna background halaman secara acak setiap diklik.
2. **Tampilkan Array ke Halaman** — Buat array berisi 5 nama mahasiswa, lalu tampilkan semuanya ke halaman menggunakan DOM manipulation.
3. **Ambil Data API** — Gunakan Fetch API untuk mengambil data dari `https://dummyjson.com/users/1` dan tampilkan nama, email, dan umur ke halaman HTML.
