<?php

require_once 'Produk.php';

$produk = new Produk("Mouse Gaming", 150000);

echo "<h2>Modul 06: Encapsulation (Getter & Setter)</h2>";
echo "Data Awal: " . $produk->getInfo() . "<br><br>";

// Mengubah harga dengan nilai valid via Setter
$produk->setHarga(175000);
echo "Harga Baru: Rp " . number_format($produk->getHarga(), 0, ',', '.') . "<br><br>";

// Mencoba mengisi harga negatif (akan ditolak oleh validasi Setter)
$produk->setHarga(-20000); 

// Memastikan harga tidak berubah jika validasi gagal
echo "Data Akhir: " . $produk->getInfo() . "<br>";