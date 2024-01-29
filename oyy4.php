<?php
// membuat setter - getter

class menu{
    private $nama;
    private $harga;
    private $jumlahbeli;
    

    public function __construct($nama,$harga,$jumlahbeli){
        $this->nama=$nama;
        $this->harga=$harga;
        $this->jumlahbeli=$jumlahbeli;
        
        }

    public function getnama(){
        return $this->nama;
    }

    public function getharga(){
        return $this->harga;
    }

    public function getjumlahbeli(){
        return $this->jumlahbeli;
    }

    public function gettotal(){
        $total=$this->jumlahbeli*$this->harga;
        return $total;
    }

   
}

class pembeli extends menu{
    private $namapembeli;
    private $alamat;

    public function __construct($nama,$jumlahbeli,$harga,$namapembeli,$alamat){
        parent::__construct($nama,$jumlahbeli,$harga);
    $this->namapembeli=$namapembeli;
    $this->alamat=$alamat;
    }

    public function getnamapembeli(){
        return $this->namapembeli;
    }
    public function getalamat(){
        return $this->alamat;
    }


    public function tampil(){
        return "Hai  ".$this->namapembeli.
               "<br> Alamat kamu di ".$this->alamat.
               "<br> Kamu membeli = ".parent::getnama().
               "<br> Jumlah beli = ".parent::getjumlahbeli().
               "<br> Totalnya = ".parent::gettotal().
               "<br>Terima Kasih";
               
    }
    
}


$pembeli1= new pembeli("seblak","12000","2","Ali","Cirebon");
echo $pembeli1->tampil();

?>