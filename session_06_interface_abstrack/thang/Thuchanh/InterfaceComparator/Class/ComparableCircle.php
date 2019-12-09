<?php

include_once "Circle.php";
include_once "Interface/Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        // TODO: Implement compareTo() method.
        if ($this->radius > $circleOther->radius)
            return 1;
        elseif ($this->radius = $circleOther->radius)
            return 0;
        else
            return -1;
    }

}