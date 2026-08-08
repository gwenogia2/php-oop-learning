<?php

require_once 'Produk.php';

$produk1 = new Produk();
$produk1->nama = "Kopi Hitam";
$produk1->harga = 15000;

$produk2 = new Produk();
$produk2->nama = "Teh Manis";
$produk2->harga = 5000;

echo "<h2>Modul 02: Properties & Methods</h2>";
echo $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br>";