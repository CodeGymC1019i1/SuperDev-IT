<?php

include_once "Shape.php";
include_once "Interface/Resizeable.php";

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = (double) $radius;

    }

    public function calculateArea()
    {
        return pi() * $this->radius ** 2;
    }

    public function calculatePerimeter()
    {
        return pi() * 2 * $this->radius;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        return $this->calculateArea() * (1 + $percent/100);
    }
}