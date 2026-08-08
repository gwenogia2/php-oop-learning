<?php

require_once 'Produk.php';

class ProdukBuku extends Produk 
{
    public int $jumlahHalaman;

    public function __construct(string $nama, int $harga, int $jumlahHalaman)
    {
        // Memanggil constructor parent
        parent::__construct($nama, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoLengkap(): string 
    {
        return "[BUKU] " . parent::getInfo() . " | Tebal: {$this->jumlahHalaman} hlm";
    }
}