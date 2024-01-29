<?php
class menu{
    private $harga;
    public $nama;
    public function __construct($nama,$harga){
        $this->nama=$nama;
        $this->harga=$harga;
    }

    public function tampil(){
        $hasil="{$this->nama} | Harga: {$this->harga}";
        return $hasil;
    }
    public function harga(){
        return $this->harga;
    }
}

class makanan extends menu{
    public $jumlah;
    public $diskon, $totalbayar;
    public function __construct($nama,$harga,$halaman,$jumlah){
        parent::__construct($nama,$harga);
        $this->halaman=$halaman;
        $this->jumlah=$jumlah;
        if ($jumlah<5) {
            $diskon=0;
            $totalbayar=$harga*$jumlah;
        }else{
            $diskon="50%";
            $totalbayar=($harga*$jumlah)-(($harga*$jumlah)*0.5);
        }
        $this->diskon=$diskon;
        $this->totalbayar=$totalbayar;
    }
    public function tampil(){
        return "Buku: ". parent::tampil()." | $this->halaman halaman <br> Jumlah beli = $this->jumlah <br> Diskon = $this->diskon <br> Total Bayar = $this->totalbayar";
    }
}

class minuman extends menu{
    public $jumlah;
    public $diskon, $totalbayar;
    public function __construct($nama,$harga,$halaman,$jumlah){
        parent::__construct($nama,$harga);
        $this->halaman=$halaman;
        $this->jumlah=$jumlah;
        $this->jumlah=$jumlah;
        if ($jumlah<5) {
            $diskon=0;
            $totalbayar=$harga*$jumlah;
        }else{
            $diskon="50%";
            $totalbayar=($harga*$jumlah)-(($harga*$jumlah)*0.5);
        }
        $this->diskon=$diskon;
        $this->totalbayar=$totalbayar;
    }
    public function tampil(){
        return "Buku: ". parent::tampil()." | $this->halaman halaman <br> Jumlah beli = $this->jumlah <br> Diskon = $this->diskon <br> Total Bayar = $this->totalbayar";
    }
}

$menu1 = new makanan("Buku ABC","20000","50","1");
$menu2 = new minuman("Buku ABC","20000","50","10");
echo $menu1->tampil();
echo "<br>------------------------------------------------------------------------------------------------------ <br>";
echo $menu2->tampil();
echo "<br><br>";

?>