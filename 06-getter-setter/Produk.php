<?php

class Produk 
{
    private string $nama = '';
    private int $harga = 0;

    public function __construct(string $nama, int $harga)
    {
        $this->setNama($nama);
        $this->setHarga($harga); // Menggunakan setter untuk validasi awal
    }

    // --- GETTER ---
    public function getNama(): string 
    {
        return $this->nama;
    }

    public function getHarga(): int 
    {
        return $this->harga;
    }

    // --- SETTER ---
    public function setNama(string $nama): void 
    {
        if (trim($nama) === "") {
            echo "⚠️ Nama produk tidak boleh kosong!<br>";
            return;
        }
        $this->nama = $nama;
    }

    public function setHarga(int $harga): void 
    {
        // Validasi agar harga tidak negatif
        if ($harga < 0) {
            echo "⚠️ [Sistem] Gagal set harga: Harga tidak boleh negatif ($harga)!<br>";
            return;
        }
        $this->harga = $harga;
    }

    public function getInfo(): string 
    {
        return "{$this->getNama()} | Rp " . number_format($this->getHarga(), 0, ',', '.');
    }
}