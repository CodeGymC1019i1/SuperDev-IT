<?php

include_once "Interface/Edible.php";

abstract class Fruit implements  Edible
{
    public function howtoEat()
    {
        // TODO: Implement howtoEat() method.
        return "Could be a lot of way to use!<br>";
    }
}