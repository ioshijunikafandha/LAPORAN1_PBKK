<?php
class Animal {
    protected $name;
    protected $species;

    public function __construct($name, $species) {
        $this->name = $name;
        $this->species = $species;
    }

    public function getInfo() {
        return "<br>" . "Name: $this->name" ."<br>". "Species: $this->species";
    }
}
?>
