<?php
require_once 'Dog.php';
require_once 'Cat.php';

class Zoo {
    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function listAnimals() {
        echo "Animals in the zoo\n" . "<br>";
        foreach ($this->animals as $animal) {
            echo $animal->getInfo() . "\n";
        }
    }
}
?>
