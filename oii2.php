<?php
// membuat suhu

class suhu{
    public $celcius;

    public function __construct($celcius){
        $this->celcius=$celcius;
    }

    public function reamur(){
        $hasil= 4/5*$this->celcius;
        return $hasil1;
    }

    public function fahrenhit(){
        $hasil2= 9/5*$this->celcius + 32 ;
        return $hasil2;
    }

    public function kelvin(){
        $hasil3=$this->celcius + 273 ;
        return $hasil3;
    }
}

class reamur extends suhu{
    public function tampil1(){
        return "celcius ke reamur =".$this->celcius*4/5;
    }
}

class fahrenhit extends suhu{
    public function tampil(){
        return"celcius ke fahrenhit =".$this->celcius*9/5 + 32;
    }
}

class kelvin extends suhu{
    public function tampil(){
        return "celcius ke kelvin =".$this->celcius+273;
    }
}
$suhu1= new reamur(25);
$suhu2= new fahrenhit(-45);
$suhu3= new kelvin(40);
echo $suhu1->tampil()."<br>";
echo $suhu2->tampil()."<br>";
echo $suhu3->tampil()."<br>";
?>