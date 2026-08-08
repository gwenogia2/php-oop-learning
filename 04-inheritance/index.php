<?php

require_once 'ProdukBuku.php';
require_once 'ProdukDigital.php';

$buku = new ProdukBuku("Pemrograman PHP OOP", 85000, 250);
$ebook = new ProdukDigital("E-Book Belajar Laravel", 50000, 15);

echo "<h2>Modul 04: Inheritance (Pewarisan)</h2>";
echo $buku->getInfoLengkap() . "<br>";
echo $ebook->getInfoLengkap() . "<br>";