# Modul 02: Properties & Methods

Modul ini membahas cara memberi variabel internal (property) dan fungsi khusus (method) ke dalam class agar object memiliki data dan kemampuan bertindak.


## 1. Konsep

- **Properties**: Variabel yang melekat di dalam class untuk menyimpan data atau karakteristik dari object.
- **Methods**: Fungsi yang dibuat di dalam class untuk menentukan aksi atau perilaku yang bisa dilakukan oleh object, seperti mengolah atau menampilkan data property.


## 2. Analogi Cetakan Kue

- **Properties = Bahan & Rasa Kue**
  Jika cetakan kuenya sama, kita bisa memberi isian atau topping yang berbeda, seperti rasa cokelat, keju, atau harga jual kue tersebut. Property menentukan ciri khas dari masing-masing kue.
- **Methods = Cara Menyajikan Kue**
  Method ibarat instruksi atau kemampuan kue saat disajikan, misalnya fungsi untuk menampilkan label rasa dan harga kue kepada pembeli.


## 3. Struktur File

- `Produk.php`: Tempat mendefinisikan property (`$nama`, `$harga`) dan method (`getInfo()`) pada class `Produk`.
- `index.php`: Tempat mengisi nilai property object dan memanggil method yang sudah dibuat.


## 4. Cara Menjalankan

1. Buka terminal dan masuk ke folder ini:
   ```bash
   cd 02-properties-methods