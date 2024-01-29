<?php
//construct

class produk{
    public $nama;
    public $merk;
    public $harga;
    public $stok;

    public function __construct($namaproduk,$merkproduk,$hargaproduk,$stokproduk){
        $this->nama=$namaproduk;
        $this->merk=$merkproduk;
        $this->harga=$hargaproduk;
        $this->stok=$stokproduk;
    }
    public function tampil(){
        return "$this->nama, ";
    }
}
$produk1 = new produk("handphone","iphone","10.000.000","100");
echo "halo produknya"  .$produk1->tampil();
?>