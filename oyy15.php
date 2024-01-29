<?php
interface caramain{
    public function main();
}

interface pemain{
    public function banyakpemain();
}

class sepakbola implements caramain,pemain{
    public function main(){
echo "cara bermain sepak bola adalah ditendang<br>";
}

public function banyakpemain(){
    echo"banyak pemain adalah 11 orang<hr>";
}
}

class voli implements caramain,pemain{
    public function main(){
        echo "cara bermain bola voli dengan dipukul<br>";
    }

    public function banyakpemain(){
        echo"banyak pemain bola voli adalah 6 orang<hr>";
    }
}

class basket implements caramain,pemain{
    public function main(){
        echo"cara bermain basket adalah dengan di lempar ke dalam ring<br>";
    }

    public function banyakpemain(){
        echo"banyak pemain adalah 4 orang<hr>";
    }
}

$sepakbola = new sepakbola();
echo $sepakbola->main();
echo"<br>".$sepakbola->banyakpemain();
$voli = new voli();
echo $voli->main();
echo $voli->banyakpemain();
$basket = new basket();
echo $basket->main();
echo $basket->banyakpemain();
?>