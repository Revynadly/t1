<?php

abstract class Person {
    abstract function makan();
    abstract function latihan();
}

class Atlet extends Person {
    function makan() {
        return "Atlet makan berat dan bergizi.";
    }

    function latihan() {
        return "Atlet latih sepuasnya untuk meraih prestasi.";
    }
}

class Pemalas extends Person {
    function makan() {
        return "Pemalas makan kekinian dan ringan.";
    }

    function latihan() {
        return "Pemalas latih untuk meningkatkan kecepatan dan gaya.";
    }
}

$atlet = new Atlet();
echo "<br>".$atlet->makan() ;
echo "<br>".$atlet->latihan() ;

$pemalas = new Pemalas();
echo"<br>". $pemalas->makan() ;
echo "<br>".$pemalas->latihan() ;
?>