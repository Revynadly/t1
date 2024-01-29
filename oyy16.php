<?php
interface televisi {
    public function channelNext();
    public function channelBack();
}
class tivi{
    public $channel;
    public $power;
    public function __construct($channel,$power) {
      $this->channel = $channel;
      $this->power = $power;
    }
}
class tvsaya extends tivi implements televisi{ 
    public function channelNext() {
      if($this->power == "on"){
         if ($this->channel < 10) {
           $this->channel++;
           return "Channel sekarang: ".$this->channel."<br>";
       } else {
          return "Batas channel sudah 10<br>";
       }
}else{
  return "TV mati<br>";
}
      
    }

    public function channelBack() {
      if($this->power == "on"){
        if ($this->channel > 1) {
          $this->channel--;
          return "Channel sekarang: ".$this->channel."<br>";
      } else {
          echo "Channel sudah paling bawah.<br>";
      }
} else{
        return "TV mati<br>";
}
    }

    public function poweron(){
      $this->power = "on";
      return "TV telah dinyalakan<br>";
    }

    public function poweroff(){
      $this->power = "off";
      return "TV telah dimatikan<br>";
    }
}

$tivi = new tvsaya(5,"on");
echo $tivi->channelNext();
echo $tivi->poweroff();
echo $tivi->channelNext();
echo $tivi->poweron();
echo $tivi->channelNext();
echo $tivi->channelBack();
echo $tivi->poweroff();
echo $tivi->channelBack();
?>