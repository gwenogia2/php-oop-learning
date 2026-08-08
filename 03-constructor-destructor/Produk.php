<?php

class Produk 
{
    public string $nama;
    public int $harga;

    // Otomatis berjalan saat objek dibuat (Wajib isi nama & harga)
    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        echo "Objek '{$this->nama}' berhasil dibuat.<br>";
    }

    public function getInfo(): string 
    {
        return "Produk: {$this->nama} | Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }

    // Otomatis berjalan saat skrip selesai / objek dihancurkan
    public function __destruct()
    {
        echo "Objek '{$this->nama}' dihapus dari memori.<br>";
    }
}