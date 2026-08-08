<?php

require_once 'Produk.php';

class ProdukDigital extends Produk 
{
    public int $ukuranMB;

    public function __construct(string $nama, int $harga, int $ukuranMB)
    {
        parent::__construct($nama, $harga);
        $this->ukuranMB = $ukuranMB;
    }

    public function getInfoLengkap(): string 
    {
        return "[DIGITAL] " . parent::getInfo() . " | Ukuran: {$this->ukuranMB} MB";
    }
}