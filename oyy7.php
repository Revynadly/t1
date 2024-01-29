<?php
class lingkaran{
  public static $jarijari;
  const PHI = '3.14';

  public static function luas(){
return "jari jarinya adalah = ".self::$jarijari."
<br> luas = ".self::PHI * self::$jarijari * self::$jarijari."cm<sup>2</sup>
<br> keliling= "."2"*self::PHI * self::$jarijari;
  }
}
lingkaran::$jarijari=10;

echo lingkaran::luas();


?>