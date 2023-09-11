<?php
require_once 'Animal.php';

class Cat extends Animal {
    private $color;

    public function __construct($name, $species, $color) {
        parent::__construct($name, $species);
        $this->color = $color;
    }

    public function getInfo() {
        return parent::getInfo() . "<br>". "Color: $this->color";
    }
}
?>
