<?php
    class Angka{
        public function __construct($no){
            $this->no = $no;
        }
        public function getAngka(){
            $data = explode('-',$this->no);
            foreach ($data as $key){
                echo $key."<hr>";
            }
        }
        public function getJumlah(){
            $data = explode(',',$this->no);
            $jumlah = 0;
            foreach ($data as $key){
                $jumlah = $jumlah + $key;
            }
            return $jumlah."<hr>";
        }
        public function getRata(){
            $data = explode(',',$this->no);
            $jumlah = 0;
            $rata_rata = count($data);
            foreach ($data as $key){
                $jumlah = $jumlah+$key/$rata_rata;
            }
            return $jumlah."<hr>";
        }

        public function getBanyak(){
            $data = explode(',',$this->no);
            $banyak = 0;
            foreach ($data as $key){
                $banyak = count($data);
            }
            return $banyak."<hr>";
        }
        
        public function getGenap(){
            $data = explode(',',$this->no);
            foreach ($data as $key){
                if ($key % 2 == 0) {
                    echo "$key Bilangan Genap<hr>";
                } else {
                    echo "$key bilangan Ganjil<hr>";
                }
            }
        }
    }
$angka1 = new Angka('10,11,12,13,14');
echo $angka1->getAngka();
echo $angka1->getJumlah();
echo $angka1->getRata();
echo $angka1->getBanyak();
echo $angka1->getGenap();
?>