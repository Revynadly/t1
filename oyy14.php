<?php
interface animal{
    public function sound();
}

abstract class habitat{
    abstract public function habitat();
}

class ayam extends habitat implements animal{
    public function sound(){
    return "cukurukuk <br>";
}

function habitat (){
    return "kampung";
}
}

$ha1 = new ayam();
echo $ha1->sound();
echo $ha1->habitat();
?>