<?php

require_once 'Produk.php';

class ProdukBuku extends Produk 
{
    public function setDiskonKhususBuku(int $persen): void 
    {
        // $diskon bersifat protected, jadi bisa diakses oleh child class
        $this->diskon = $persen;
    }
}