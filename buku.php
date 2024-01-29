<?php
//inheritanse=pewarisan
class menu{
    public $namamenu;
    public $harga;

    public function __construct($namamenu, $harga, $levelpedas,$topping){
        $this->namamenu=$namamenu;
        $this->harga=$harga;
        $this->levelpedas=$levelpedas;
        $this->topping=$topping;
    }
    public function tampil(){
        $hasil="{$this->namamenu} | {$this->harga}";
        return $hasil;
    }
}
class makanan extends menu{
    public function tampil(){
        return "nama menu : $this->namamenu <br>
        harga : $this->harga <br>
        levelpedas : $this->levelpedas <br>
        topping : $this->topping";
    }
}
class minuman extends menu{
    public function tampil(){
        return "nama menu : $this->namamenu <br>
        harga : $this->harga <br>
        topping : $this->topping";
    }
}
$menu1 = new makanan("seblak ceker","12000","5","ceker");
$menu2 = new minuman("boba taro","18000","0","keju");
echo $menu2->tampil();
echo $menu1->tampil();
?>