<?php

include_once "Interface/Edible.php";

class Orange implements Edible
{
    public function howtoEat()
    {
        // TODO: Implement howtoEat() method.
        return "Orange couble be juiced."."<br>";
    }
}