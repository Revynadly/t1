<?php
class orang{
    public $nip;
    public $nama; 
    public $alamat;
    public $no_hp;

    public function __construct($nip,$nama,$alamat,$no_hp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->no_hp = $no_hp;
    }
}
class isi{
    public $isi;
    public function __construct(orang $orang){
        $this->isi = $orang;
        //class seblak = $seblak
        //$this->isi = $seblak = class seblak

    }
    public function tampilorang(){
        return"
      nip ={$this->isi->nip}<br>
      nama orang = {$this->isi->nama};
      alamat = {$this->isi->alamat};
      no_hp = {$this->isi->no_hp}";
    }
}
$orang= new orang('1234567', 'saipul','kanggraksan','08215678910');
$ipul = new isi($orang);
echo $ipul->tampilorang();
?>