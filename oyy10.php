<?php

abstract class Produk {
    public $namaBarang;
    public $stok;

    public function __construct($namaBarang, $stok) {
        $this->namaBarang = $namaBarang;
        $this->stok = $stok;
    }

    abstract public function lihatStok();
    abstract public function tambahStok($jumlah);
    abstract public function pembelian($jumlah);
}

class Makanan extends Produk {
    public function lihatStok() {
        return "<hr> Stok {$this->namaBarang} adalah {$this->stok}";
    }

    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
        return "<hr> Berhasil menambah {$jumlah} {$this->namaBarang}";
    }

    public function pembelian($jumlah) {
        if ($this->stok >= $jumlah) {
            $this->stok -= $jumlah;
            return "<hr> Berhasil membeli {$jumlah} {$this->namaBarang}";
        } else {
            return "<hr> Stok {$this->namaBarang} tidak mencukupi";
        }
    }
}

$makanan = new Makanan("Nasi Goreng", 50);
echo $makanan->lihatStok() ;
echo $makanan->tambahStok(20);
echo $makanan->lihatStok();
echo $makanan->pembelian(30) ;
echo $makanan->lihatStok();
?>