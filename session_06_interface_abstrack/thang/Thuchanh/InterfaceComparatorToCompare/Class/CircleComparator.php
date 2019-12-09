<?php

include_once "Circle.php";
include_once "Interface/Comparator.php";

class CircleComparator implements Comparator
{

    public function compare($circleOne, $circleTwo)
    {
        // TODO: Implement compareTo() method.
        $radiusOne = $circleOne->radius;
        $radiusTwo = $circleTwo->radius;
        if ($radiusOne > $radiusTwo)
            return 1;
        elseif ($radiusOne == $radiusTwo)
            return 0;
        else
            return -1;
    }

}