<?php

include_once "class/Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return 2 * 3.14 * ($this->radius + $this->height);
    }

    public function calculateVolume()
    {
        return 3.14 * ($this->radius ** 2) * $this->height;
    }
}