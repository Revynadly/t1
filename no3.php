<?php
 class orang {
    private $nip,$nama,$alamat,$nohp;

    public function __construct($nip,$nama,$alamat,$nohp){
        $this->nip=$nip;
        $this->nama=$nama;
        $this->alamat=$alamat;
        $this->nohp=$nohp;
    }

    public function getnip(){
        return $this->nip;
    }

    public function getnama(){
        return $this->nama;
    }

    public function getalamat(){
        return $this->alamat;
    }

    public function getnohp(){
        return $this->nohp;
    }
 
 }

 class pegawai extends orang{
    private $id_pegawai;

    public function __construct($id_pegawai,$nip,$nama,$alamat,$nohp){
        parent::__construct($nip,$nama,$alamat,$nohp);
        $this->id_pegawai=$id_pegawai;
    }

    public function getidpegawai(){
        return $this->id_pegawai;
    }

    public function tampil(){
        return "Hai  ".parent::getnama().
        "<br> Id Pegawai Kamu ".$this->id_pegawai.
        "<br> Alamat kamu di ".parent::getalamat().
        "<br> Nip Kamu ".parent::getnip().
        "<br> No Hp Kamu ".parent::getnohp().
        "<br>Terima Kasih";
        
    }
 }
 $pegawai1= new pegawai("87910","156789910","asep","singapur","08999987");
 echo $pegawai1->tampil();

?>