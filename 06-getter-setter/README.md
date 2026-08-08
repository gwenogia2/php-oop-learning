# Modul 06: Getter & Setter

Modul ini membahas cara mengelola dan mengamankan property bertipe `private` menggunakan method khusus `Getter` (untuk membaca nilai) dan `Setter` (untuk mengubah nilai dengan validasi).

---

## 1. Konsep

- **Getter**: Method publik yang digunakan untuk mengambil atau membaca nilai dari property `private` dari luar class.
- **Setter**: Method publik yang digunakan untuk mengubah atau mengisi nilai property `private`. Di dalam setter, kita dapat menambahkan logika validasi agar data yang masuk selalu valid (misal: memblokir input harga negatif atau string kosong).

---

## 2. Analogi Cetakan Kue

- **Getter = Kasir Toko Kue**
  Karena kue disimpan di dalam etalase terkunci (`private`), pembeli tidak boleh mengambilnya sendiri. Pembeli harus bertanya ke kasir (getter) untuk mengetahui detail dan harga kue tersebut.
- **Setter = Petugas Kasir / Validasi Pembayaran**
  Saat pembeli ingin mengubah atau memesan kue dengan spesifikasi khusus, perubahan itu tidak langsung terjadi begitu saja. Kasir (setter) akan mengecek terlebih dahulu apakah uangnya cukup dan permintaannya valid sebelum kue diproses.

---

## 3. Struktur File

- `Produk.php`: Tempat mendeklarasikan property `private` beserta method getter (`getNama()`, `getHarga()`) dan setter (`setNama()`, `setHarga()`) yang dilengkapi validasi.
- `index.php`: Tempat menguji pengubahan data via setter, baik menggunakan nilai yang valid maupun nilai yang memicu kegagalan validasi.

---

## 4. Cara Menjalankan

1. Buka terminal dan masuk ke folder ini:
   ```bash
   cd 06-getter-setter