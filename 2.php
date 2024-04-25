<?php
// Nama     : Muhammad Fauzan Dzika
// NIM      : 22090081
// Kelas    : 4A
class Buku {
    private $Judul;
    private $Tahun;
    private $Halaman;
    private $BahanMaterial;
    private $Diskon;

    function __construct($Judul, $Tahun, $Halaman, $BahanMaterial, $Diskon) {
        $this->Judul = $Judul;
        $this->Tahun = $Tahun;
        $this->Halaman = $Halaman;
        $this->BahanMaterial = $BahanMaterial;
        $this->Diskon = $Diskon;
    }

    function getJudul() {
        return $this->Judul;
    }

    function getTahun() {
        return $this->Tahun;
    }

    function getHalaman() {
        return $this->Halaman;
    }

    function getBahanMaterial() {
        return $this->BahanMaterial;
    }

    function getDiskon() {
        return $this->Diskon;
    }

    function ubahDiskon($DiskonBaru) {
        $this->Diskon = $DiskonBaru;
    }

    function PeriksaHarga() {
        $Harga = 0;

        if ($this->Tahun <= 5) {
            if ($this->Halaman <= 100) {
                $Harga = 100000;
            } elseif ($this->Halaman >= 500) {
                $Harga = 500000;
            } else {
                $Harga = 300000;
            }
        } elseif ($this->Tahun > 5 && $this->Tahun <= 10) {
            if ($this->Halaman <= 100) {
                $Harga = 50000;
            } elseif ($this->Halaman >= 500) {
                $Harga = 250000;
            } else {
                $Harga = 150000;
            }
        } else {
            $Harga = 10000;
        }

        return $Harga - ($Harga * ($this->Diskon / 100));
    }
}

class Komik extends Buku {
    private $isColorful;

    public function __construct($Judul, $Tahun, $Halaman, $BahanMaterial, $Diskon, $isColorful) {
        parent::__construct($Judul, $Tahun, $Halaman, $BahanMaterial, $Diskon);
        $this->isColorful = $isColorful;
    }

    function getIsColorful() {
        return $this->isColorful;
    }
}

// Membuat objek Buku
$buku = new Buku("Calculus", 2024, 1000, "Kertas", 0);
echo "Judul Buku: " . $buku->getJudul() . "<br>";

// Membuat objek Komik
$komik = new Komik("One Piece", 1998, 500, "Kertas", 0, true);
echo "Judul Komik: " . $komik->getJudul();
?>