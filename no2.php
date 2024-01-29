<?php
class menu{
    private $Namamenu;
    private $Hargamenu;
    private $Jumlahbeli;

    public function __construct($Namamenu,$Hargamenu,$Jumlahbeli){
        $this->Namamenu=$Namamenu;
        $this->Hargamenu=$Hargamenu;
        $this->Jumlahbeli=$Jumlahbeli;
    }
    public function getNamamenu(){
        return $this->Namamenu;
    }
    public function getHargamenu(){
        return $this->Hargamenu;
    }
    public function getJumlahbeli(){
        return $this->Jumlahbeli;
    }
    public function getTotalbayar(){
        return ($this->Jumlahbeli * $this->Hargamenu);
    }
}
$menu1= new menu ("basreng","pedas gledek","5000");
echo "Menu yang dibeli = " .$menu1->getNamamenu() ."<br>";
echo  "Harganya = rasa " .$menu1->getHargamenu() ."<br>";
echo "jumlahbeli =   " .$menu1->getJumlahbeli() ."<br>";
echo "Total bayar = rp " .$menu1->getTotalbayar();
?>