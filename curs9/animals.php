<?php

require_once "Dog.php";

$dog = new Dog('Thor',3,4,10);

$dog->setLegs(4);
$dog->setHeight(20);
var_dump($dog->getHeight());

echo '<br>';
echo $dog;

$cat= new Cat('Tom', 3,4,15);

$cat->legs=2;
