<?php
//belajar overidding

class menu{
    public $namamenu;
    public $harga;

    public function __construct($namamenu, $harga){
        $this->namamenu=$namamenu;
        $this->harga=$harga;
    }

    public function tampil(){
        $hasil="{$this->namamenu} | {$this->harga}";
        return $hasil;
    }

public function harga(){
    return $this->harga;
  }
}


class makanan extends menu{
    public $levelpedas;
    public function __construct($namamenu,$harga,$levelpedas){
    parent :: __construct($namamenu,$harga);
    $this-> levelpedas=$levelpedas; 
    }
}

class minuman extends menu{
public $topping;
public function __construct($namamenu,$harga,$topping){
parent :: __construct($namamenu,$harga);
    $this-> topping=$topping; 
}

public function tampil(){
    return"minuman".parent::tampil()."|$this->topping toping<br>";
}
}
$menu1=new makanan("pizza","2000000","pedas");
$menu2=new minuman("jus","50000","cream");
echo $menu1->tampil()."<br>";
echo $menu2->tampil()."<br>";
echo "harga makanan =".$menu1->harga()."<br>";
echo "harga minuman =".$menu2->harga()."<br>";
?>