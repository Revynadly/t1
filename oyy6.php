<?php
//class menu
//konstannya nama menu= seblak
//property 
class menu {
    public static $jumlahbeli,$harga;
    const NAMAMENU ="babi guling";
    
    //membuat method static
    public static function tampil(){
        return "nama menu adalah ".self::NAMAMENU."<br>jumlah beli ".self::$jumlahbeli."<br>harga ".self::$harga;
    }
}
menu::$jumlahbeli="12";
menu::$harga="20000";

echo menu::tampil();
?>