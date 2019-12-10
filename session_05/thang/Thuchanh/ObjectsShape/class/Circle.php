<?php

include_once "class/Shape.php";

class Circle extends Shape
{
    public $radius;
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * 3.14;
    }

    public function calculatePerimeter()
    {
        return $this->radius ** 2 * 3.14;
    }
}