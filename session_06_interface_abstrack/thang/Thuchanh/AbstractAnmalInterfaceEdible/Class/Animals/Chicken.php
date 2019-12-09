<?php

include_once "Abstract/Animal.php";
include_once "Interface/Edible.php";

class Chicken extends Animal implements Edible
{
    
    
    public function howtoEat()
    {
        // TODO: Implement howtoEat() method.
        return "Chicken could be fried!<br>";
    }

    public function makeSound()
    {
        return "Puk Puk Pukaaak!!!<br>";
    }
}