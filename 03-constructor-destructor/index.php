<?php

require_once 'Produk.php';

echo "<h2>Modul 03: Constructor & Destructor</h2>";

$produk1 = new Produk("Buku Tulis", 12000);
$produk2 = new Produk("Pulpen Gel", 5000);

echo "<br>" . $produk1->getInfo() . "<br>";
echo $produk2->getInfo() . "<br><br>";