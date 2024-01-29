<?php
class seblak{
    public $nama;
    public $harga; 

    public function __construct($nama,$harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }
}
class pesanan{
    public $isi;
    public function __construct(seblak $seblak){
        $this->isi = $seblak;
        //class seblak = $seblak
        //$this->isi = $seblak = class seblak

    }
    public function tampilseblak(){
        return"
      nama seblak ={$this->isi->nama}<br>
      harga = {$this->isi->harga}";
    }
}
$seblak1 = new seblak('seblak ceker','12000');
$pesananbintowok = new pesanan($seblak1);
echo $pesananbintowok->tampilseblak();
?>