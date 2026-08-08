<?php

class Produk 
{
    // Properties (Atribut)
    public string $nama = "Produk Default";
    public int $harga = 0;

    // Method (Aksi/Perilaku)
    public function getInfo(): string 
    {
        return "Produk: {$this->nama} | Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}