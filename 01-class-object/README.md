# Modul 01: Class & Object

Modul ini membahas dasar paling awal dari Pemrograman Berbasis Objek (OOP) di PHP, yaitu bagaimana membuat class dan mengubahnya menjadi object.


## 1. Konsep

- **Class**: Struktur data atau cetak biru (blueprint) yang mendefinisikan sifat dan perilaku dari suatu entitas. Class sendiri belum memiliki wujud nyata di memori komputer sampai dia diinstansiasi.
- **Object**: Hasil cetakan fisik dari class yang menempati memori komputer. Sebuah class bisa digunakan untuk membuat banyak object yang berdiri sendiri secara terpisah.


## 2. Analogi Cetakan Kue

- **Class = Cetakan Kue**
  Cetakan kue stainless/plastik di dapur itu sendiri bukanlah makanan yang bisa dimakan. Cetakan hanya menentukan bentuk, ukuran, dan pola dari kue yang akan dibuat.
- **Object = Kue yang Sudah Jadi**
  Ketika adonan dituangkan ke dalam cetakan dan dipanggang, hasilnya adalah kue nyata. Setiap kue yang dicetak memiliki bentuk yang sama persis sesuai cetakannya, tetapi masing-masing kue berdiri sendiri (misalnya, jika satu kue dimakan, kue lainnya tidak akan terpengaruh).


## 3. Struktur File

- `Produk.php`: Tempat membuat class `Produk`.
- `index.php`: Tempat menginstansiasi class `Produk` menjadi objek dengan kata kunci `new`.


## 4. Cara Menjalankan

1. Buka terminal dan masuk ke folder ini:
   ```bash
   cd 01-class-object

2. Jalankan server lokal PHP:

Bash
php -S localhost:8000

3. Buka http://localhost:8000 di browser.