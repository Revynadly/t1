<?php
class orang{
    public $nip;
    public $nama;
    public $alamat;
    public $no_hp;

    public function __construct($nip,$nama,$alamat,$no_hp) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->no_hp = $no_hp;
    }
}

class pegawai {
    private $daftar_pegawai = array();

    public function tambahpegawai(orang $pegawai) {
        $this->daftar_pegawai[] = $pegawai;
    }

    public function tampilnamapegawai() {
        foreach ($this->daftar_pegawai as $pegawai) {
            echo "nama:" . $pegawai->nama . "<br>";
        }
    }
}

$orang1 = new orang("145","revy","mars","08214567810");
$orang2 = new orang("167","icaa","kanggraksan","08888910");

$pegawai = new pegawai();
$pegawai->tambahpegawai($orang1);
$pegawai->tambahpegawai($orang2);

$pegawai->tampilnamapegawai();
