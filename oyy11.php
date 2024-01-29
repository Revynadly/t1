<?php

abstract class Shape {
    abstract function luas();
    abstract function keliling();
}

class Persegi_panjang extends Shape {
    private $panjang;
    private $lebar;

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
    private $alas;
    private $tinggi;

    function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    function luas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function keliling() {
        return $this->alas + sqrt($this->alas * $this->alas + $this->tinggi * $this->tinggi) + $this->tinggi;
    }
}

$persegi_panjang = new Persegi_panjang(10, 20);
echo "Luas persegi panjang: " . $persegi_panjang->luas() . "<br>";
echo "Keliling persegi panjang: " . $persegi_panjang->keliling() . "<br><br>";

$segitiga = new Segitiga(10, 20);
echo "Luas segitiga: " . $segitiga->luas() . "<br>";
echo "Keliling segitiga: " . $segitiga->keliling() . "<br>";

?>