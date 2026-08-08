# Modul 05: Visibility (Public, Protected, Private)

Modul ini membahas konsep hak akses (visibility) pada property dan method di PHP untuk menentukan dari mana saja data tersebut bisa diakses atau diubah.

---

## 1. Konsep

- **Public**: Property atau method dapat diakses dari mana saja (dari luar class, dari dalam class itu sendiri, maupun dari child class).
- **Protected**: Property atau method hanya dapat diakses dari dalam class itu sendiri dan class turunannya (child class). Pihak luar tidak bisa mengaksesnya secara langsung.
- **Private**: Property atau method hanya dapat diakses dari dalam class itu sendiri. Child class maupun pihak luar tidak punya akses langsung.

---

## 2. Analogi Cetakan Kue

- **Public = Etalase Toko Kue**
  Kue yang dipajang di etalase depan. Siapa saja (pembeli/luar) bisa melihat dan memegangnya secara langsung.
- **Protected = Dapur Toko Kue**
  Hanya koki utama (parent class) dan asisten koki/cabang dapur (child class) yang boleh masuk dan mengolah resep di area ini. Orang luar tidak diizinkan masuk.
- **Private = Resep Rahasia di Brankas Koki**
  Resep rahasia yang hanya dipegang oleh pembuat utamanya saja. Bahkan asisten koki (child class) pun tidak diberikan akses langsung ke brankas tersebut.

---

## 3. Struktur File

- `Produk.php`: Parent class yang menerapkan keyword `public`, `protected`, dan `private` pada property serta method.
- `ProdukBuku.php`: Child class untuk membuktikan aksesibilitas property bertipe `protected` dan keterbatasan akses property `private`.
- `index.php`: Tempat mencoba menguji akses dari luar class (mencoba memanggil property public, protected, dan private).

---

## 4. Cara Menjalankan

1. Buka terminal dan masuk ke folder ini:
   ```bash
   cd 05-visibility