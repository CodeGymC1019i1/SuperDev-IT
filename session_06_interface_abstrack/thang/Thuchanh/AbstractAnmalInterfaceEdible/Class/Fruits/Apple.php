<?php

include_once "Interface/Edible.php";
include_once "Abstract/Fruit.php";

class Apple extends Fruit implements Edible
{
    public function howtoEat()
    {
        // TODO: Implement howtoEat() method.
        return "Apple could be slided"."<br>";
    }
}