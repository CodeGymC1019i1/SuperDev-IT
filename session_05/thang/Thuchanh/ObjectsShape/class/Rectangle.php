<?php

include_once "class/Shape.php";

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}