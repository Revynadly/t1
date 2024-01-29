<?php
  class tablet{
    private $namatablet,$warna,$status;

    public function __construct($n,$w,$s){
        $this->namatablet=$n;
        $this->warna=$w;
        $this->status=$s;
    }

    public function info(){
        return "Nama Produk = ".$this->namatablet.
               "<br> Warna nya = ".$this->warna.
               "<br> Status = ".$this->status;
    }

    public function setnamaproduk($n){
        $this->namatablet=$n;
      return  " <hr> <br> Update data Nama : <b> Berhasil </b> <hr>";
      
    }

    public function setwarna($w){
         $this->warna=$w;
        return "<hr> <br> Update data Warna : <b> Berhasil</b> <hr>";
    }

    public function pinjam(){
     if($this->status == "tersedia"){
        $this->status="sedang dipinjam";
        return "<hr><br> Update Status = <b> Berhasil Dipinjam</b><hr>";
     }else{
        return "<hr><br> Update Status = <b> Gagal ,Barang sedang Dipinjam</b> ";
     }
    }

    public function kembali(){
        if($this->status == "sedang dipinjam"){
            $this->status="Tersedia";
            return"<hr><br> Update Kembali : <b> Berhasil Dikembalikan </b><hr>";
        }else{
            return"<hr><br> Update Kembali : <b> Gagal dikembalikan </b><hr>";
        }
    }


  }


  $tablet1=new tablet("Tablet a","biru","tersedia");
  echo $tablet1->info();
  echo $tablet1->setnamaproduk("tablet ab");
  echo$tablet1->info();
  echo $tablet1->setwarna("Kuning");
  echo$tablet1->info();
  echo $tablet1->pinjam();
  echo$tablet1->info();
  echo $tablet1->kembali();
  echo$tablet1->info();
?>