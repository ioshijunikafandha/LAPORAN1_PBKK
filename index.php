<?php
require_once 'Zoo.php';

$zoo = new Zoo();

// Menambahkan hewan-hewan ke kebun binatang
$dog1 = new Dog("Rex", "Dog", "Golden Retriever");
$cat1 = new Cat("Whiskers", "Cat", "Orange Tabby");
$dog2 = new Dog("Buddy", "Dog", "German Shepherd");

$zoo->addAnimal($dog1);
$zoo->addAnimal($cat1);
$zoo->addAnimal($dog2);

// Menampilkan daftar hewan di kebun binatang
$zoo->listAnimals();
?>
