<?php

include_once "Rectangle.php";
include_once "Interface/Resizeable.php";

class Square extends Rectangle implements Resizeable
{
    public $side;

    public function __construct($name, $side)
    {
        $this->name = $name;
        $this->side = (double) $side;

    }

    public function calculateArea()
    {
        return $this->side ** 2;
    }

    public function calculatePerimeter()
    {
        return $this->side * 4;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        return $this->calculateArea() * (1 + $percent/100);
    }
}