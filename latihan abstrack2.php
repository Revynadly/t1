<?php
//inheritanse=pewarisan
abstract class menu{
    public $namamenu;
    public $harga;

    abstract public function tampil();

public function cetak(){
    return "cetak";
}
}
class minuman extends menu{
    public function tampil(){
        return"hallo";
    }
}
$menu1 = new minuman();
echo $menu1->tampil();
?>