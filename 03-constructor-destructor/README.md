# Modul 03: Constructor & Destructor

Modul ini membahas method khusus (magic method) `__construct()` dan `__destruct()` yang mengatur siklus hidup (lifecycle) dari sebuah object, dari saat pertama kali dibuat hingga dihapus dari memori.

---

## 1. Konsep

- **Constructor (`__construct`)**: Method otomatis yang dipanggil pertama kali saat sebuah object diinstansiasi dengan kata kunci `new`. Biasanya digunakan untuk menerima parameter dan menginisialisasi nilai awal property.
- **Destructor (`__destruct`)**: Method otomatis yang dipanggil paling akhir ketika object selesai digunakan atau saat skrip PHP berhenti berjalan untuk membersihkan memori.

---

## 2. Analogi Cetakan Kue

- **Constructor = Proses Pencetakan Awal**
  Saat kue pertama kali dibuat, adonan wajib langsung diberi rasa dan harga sejak pertama kali dituangkan ke dalam cetakan. Tanpa proses awal ini, kue tidak lengkap.
- **Destructor = Pembersihan Loyang / Tutup Dapur**
  Setelah kue selesai dimakan atau disajikan, piring dan cetakannya otomatis dibersihkan agar memori dapur tidak penuh.

---

## 3. Struktur File

- `Produk.php`: Tempat membuat method `__construct()` untuk menerima argument awal dan `__destruct()` untuk penanganan akhir.
- `index.php`: Tempat membuat object `Produk` dengan langsung mengirimkan argument ke dalam constructor.

---

## 4. Cara Menjalankan

1. Buka terminal dan masuk ke folder ini:
   ```bash
   cd 03-constructor-destructor