<?php

abstract class Shape {
    abstract function luas();
    abstract function keliling();
}

class Persegi_panjang extends Shape {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function luas() {
        return $this->panjang * $this->lebar;
    }

    function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

class Segitiga extends Shape {
    public $alas;
    public $tinggi;
    public $sisi;

    function __construct($alas, $tinggi, $sisi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }

    function luas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function keliling() {
      $keliling = $this->alas + $this->tinggi + $this->sisi;
      return $keliling;
    }
}

$persegi_panjang = new Persegi_panjang(4, 5);
echo "Luas persegi panjang: " . $persegi_panjang->luas() . "<br>";
echo "Keliling persegi panjang: " . $persegi_panjang->keliling() . "<br><br>";

$segitiga = new Segitiga(3, 5, 6);
echo "Luas segitiga: " . $segitiga->luas() . "<br>";
echo "Keliling segitiga: " . $segitiga->keliling() . "<br>";

?>