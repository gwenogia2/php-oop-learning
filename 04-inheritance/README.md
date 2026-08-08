# Modul 04: Inheritance (Pewarisan)

Modul ini membahas konsep pewarisan (inheritance) dalam OOP, di mana sebuah class (child class) dapat menurunkan atau mewarisi property dan method dari class lain (parent class).

---

## 1. Konsep

- **Parent Class (Super Class)**: Class induk yang menyimpan property dan method umum yang bisa diturunkan.
- **Child Class (Sub Class)**: Class anak yang mewarisi sifat dari parent class menggunakan kata kunci `extends`. Child class bisa memanfaatkan seluruh fungsi induknya serta menambahkan property atau method khusus miliknya sendiri.
- **`parent::__construct()`**: Pemanggilan constructor milik parent class dari dalam child class agar inisialisasi data induk tetap berjalan dengan baik.

---

## 2. Analogi Cetakan Kue

- **Parent Class = Cetakan Kue Dasar**
  Cetakan utama yang menentukan bahwa semua kue pasti punya bentuk dasar, nama rasa, dan harga jual.
- **Child Class = Cetakan Kue Spesifik (Kue Ulang Tahun / Kue Kering)**
  Kue Ulang Tahun adalah kue, tapi punya ciri khusus tambahan seperti *tulisan ucapan* atau *lilin*. Daripada membuat cetakan dari nol, kita gunakan cetakan kue dasar lalu tambahkan atribut khusus tersebut.

---

## 3. Struktur File

- `Produk.php`: Parent class yang menyimpan property dan method umum (`$nama`, `$harga`, `getInfo()`).
- `ProdukBuku.php`: Child class yang mewarisi `Produk` dengan tambahan property khusus (`$jumlahHalaman`).
- `ProdukDigital.php`: Child class yang mewarisi `Produk` dengan tambahan property khusus (`$ukuranFile`).
- `index.php`: Tempat menginstansiasi objek dari `ProdukBuku` dan `ProdukDigital`.

---

## 4. Cara Menjalankan

1. Buka terminal dan masuk ke folder ini:
   ```bash
   cd 04-inheritance