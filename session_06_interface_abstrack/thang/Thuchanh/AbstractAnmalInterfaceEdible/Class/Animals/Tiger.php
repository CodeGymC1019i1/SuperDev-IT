<?php

include_once "Abstract/Animal.php";

class Tiger extends Animal
{

    public function makeSound()
    {
        return "Roar! Roar! Roar!!!";
    }
}