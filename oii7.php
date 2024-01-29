<?php
class seblak{
  public $nama;
  public $harga;
  public function __construct($nama,$harga){
    $this->nama=$nama;
    $this->harga=$harga;
  }
}
class pesanan{
  public $isi=[];

  public function tambahseblak(seblak $seblak,$qty){
    $this->isi[]=$seblak;
    $seblak->qty=$qty;
  }

  public function tampilseblak(){
    $output = '';
    foreach($this->isi as $seblak){
      $output.="Nama seblak = {$seblak->nama}<br>
      Harga = {$seblak->harga}<br>
      Jumlah beli = {$seblak->qty}<hr>";
    }
    return $output;
  }
  public function gettotal(){
    $total = 0;
    
    foreach($this->isi as $seblak){
      
      $total += $seblak->harga* $seblak->qty;
    }
    return "Total bayar adalah = Rp".$total."<br>";
  }
  public function banyakpesanan(){
   $pesan = 0;
   foreach($this->isi as $seblak){
    $pesan = $pesan + 1;
   }
   return "Banyak pesanan adalah = ".$pesan."<hr>";
  }
}
$seblak1 = new seblak('seblak baso','12000');
$seblak2 = new seblak('seblak sosis','15000');
$seblak3 = new seblak('seblak tulang','10000');
$pesananpratama = new pesanan();
$pesananpratama->tambahseblak($seblak1,4);
$pesananpratama->tambahseblak($seblak2,4);
$pesananpratama->tambahseblak($seblak3,2);
echo $pesananpratama->tampilseblak();
echo $pesananpratama->banyakpesanan();
echo $pesananpratama->gettotal();
?>