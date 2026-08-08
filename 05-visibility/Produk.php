<?php

class Produk 
{
    public string $nama;         // Bisa diakses di mana saja
    protected int $diskon = 0;   // Bisa diakses oleh class ini & turunannya
    private int $harga;          // Hanya bisa diakses di dalam class ini saja

    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    // Mengambil harga resmi setelah dikurangi diskon (akses internal)
    public function getHargaEfektif(): int 
    {
        return $this->harga - ($this->harga * ($this->diskon / 100));
    }

    public function getInfo(): string 
    {
        return "{$this->nama} | Rp " . number_format($this->getHargaEfektif(), 0, ',', '.');
    }
}