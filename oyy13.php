<?php
abstract class Phone {
    protected $volume;

    public function __construct() {
        $this->volume = 80;
    }

    public abstract function volumeUp();
}

class Vivoputri extends Phone {
    public function volumeUp() {
        $this->volume += 10;
        if ($this->volume >= 100) {
            echo "Volume full\n";
            $this->volume = 100;
        } else {
            echo "Volume up to: " . $this->volume . "\n";
        }
    }
}

$vivoputri = new Vivoputri();
$vivoputri->volumeUp();



?>