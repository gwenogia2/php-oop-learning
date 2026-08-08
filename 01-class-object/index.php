<?php

require_once 'Produk.php';

// Instansiasi objek dari class Produk
$produk1 = new Produk();
$produk2 = new Produk();

echo "<h2>Modul 01: Class & Object</h2>";
echo "<strong>Objek 1:</strong> ";
var_dump($produk1);

echo "<br><br><strong>Objek 2:</strong> ";
var_dump($produk2);