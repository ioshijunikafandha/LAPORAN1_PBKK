<?php
require_once 'Animal.php';

class Dog extends Animal {
    private $breed;

    public function __construct($name, $species, $breed) {
        parent::__construct($name, $species);
        $this->breed = $breed;
    }

    public function getInfo() {
        return parent::getInfo() . "<br>" ." Breed: $this->breed";
    }
}
?>
