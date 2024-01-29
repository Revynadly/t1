<?php
abstract class animal{
public $suara;
}
class kucing extends animal{
  public function sound(){
    return "Kucing Meauuuwwww!!";
  }
}

class harimau extends animal{
  public function sound(){
    return "Harimau Aummm!!";
  }
}

class kambing extends animal{
  public function sound(){
    return "Kambing Mbeeeee!!";
  }
}

$kucing1 = new kucing();
echo $kucing1->sound()."<br>";

$harimau = new harimau();
echo $harimau->sound();
?>