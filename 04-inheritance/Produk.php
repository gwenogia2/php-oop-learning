<?php

class Produk 
{
    public string $nama;
    public int $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(): string 
    {
        return "{$this->nama} | Rp " . number_format($this->harga, 0, ',', '.');
    }
}