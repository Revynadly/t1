<?php
abstract class akunbank{
  public $norek;
  public $saldo;
  public function __construct($norek, $saldo){
    $this->norek = $norek;
    $this->saldo = $saldo;
  }

  abstract public function nabung($x);
  abstract public function narik($x);
}

class tabungan extends akunbank{
  public $norek;
  public $saldo;
  public function __construct($norek, $saldo){
      parent::__construct($norek, $saldo);
  }

  public function nabung($uang){
    $this->saldo = $this->saldo+$uang;
    return "<hr>menabung : berhasil menabung sebanyak Rp . $uang.<hr>";
  }

  public function narik($uang){
    if ($this->saldo>=$uang){
      $this->saldo = $this->saldo - $uang;
      return "narik : berhasil menarik sebesar Rp. $uang.<hr>";
    }else{
      return "<hr>saldo kamu tidak cukup untuk melakukan penarikan";
    }
  }
  public function info(){
    return "saldo : Rp.$this->saldo.<hr>";
  }
}
$rekani = new tabungan('0221100', '50000');
echo $rekani->nabung(5000);
echo $rekani->info();
echo $rekani->narik(1000);
echo $rekani->info();
?>