<?php
class produk{
    public $namaproduk="handphone",
           $merkproduk="iphone",
           $hargaproduk="11.000.000",
           $stokproduk=1000;

           public function Ucaphello(){
            return "produk $this->namaproduk dengan stok $this->stokproduk
            <br> harga $this->hargaproduk merk $this->merkproduk";
           }
}
$produkA = new produk();
$produkA->namaproduk="biskuit";
$produkA->merkproduk="roma";
$produkA->hargaproduk="500 rupiah";
$produkA->stokproduk="100";
echo $produkA->Ucaphello();

?>