<?php

include_once "Class/Animals/Tiger.php";
include_once "Class/Animals/Chicken.php";
include_once "Class/Fruits/Apple.php";
include_once "Class/Fruits/Orange.php";

$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound()."<br>";
}

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howtoEat();
}
echo $animals[1]->howtoEat();