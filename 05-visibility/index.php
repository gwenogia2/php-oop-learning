<?php

require_once 'ProdukBuku.php';

$buku = new ProdukBuku("Laskar Pelangi", 70000);

echo "<h2>Modul 05: Visibility Access Modifiers</h2>";
echo "Info Awal: " . $buku->getInfo() . "<br>";

// Beri diskon melalui method di child class
$buku->setDiskonKhususBuku(20);
echo "Setelah Diskon 20%: " . $buku->getInfo() . "<br>";

// UNCOMMENT BARIS DI BAWAH UNTUK TES ERROR VISIBILITY:
// $buku->harga = 0; // ❌ ERROR: Cannot access private property
// $buku->diskon = 50; // ❌ ERROR: Cannot access protected property