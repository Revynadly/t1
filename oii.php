<?php

class persegipanjang{
    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar){
     $this->panjang=$panjang;
     $this->lebar=$lebar;
    }
    public function luas(){
        $luas= $this->panjang * $this->lebar;
        return"$luas";
    }
    public function keliling(){
        $keliling=2*$this->panjang +2*$this->lebar*2;
        return"$keliling";
    }
}
$persegi= new persegipanjang("20", "40");
echo"panjang".$persegi->panjang;
echo"   cm";
echo"<br>lebar".$persegi->lebar;
echo   "cm";
echo"<br>luas persegipanjang adalah ". $persegi->luas();
echo"   cm2";
echo"<br>keliling ".$persegi->keliling()

?>