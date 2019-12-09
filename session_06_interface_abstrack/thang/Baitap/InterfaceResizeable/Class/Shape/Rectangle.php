<?php

include_once "Shape.php";
include_once "Interface/Resizeable.php";


class Rectangle extends Shape implements Resizeable
{
    public $sideWidth;
    public $sideHeight;

    public function __construct($name, $sideWidth, $sideHeight)
    {
        parent::__construct($name);
        $this->sideWidth = (double) $sideWidth;
        $this->sideHeight = (double) $sideHeight;

    }

    public function calculateArea()
    {
        return $this->sideHeight * $this->sideWidth;
    }

    public function calculatePerimeter()
    {
        return ($this->sideHeight + $this->sideWidth) * 2;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        return $this->calculateArea() * (1 + $percent / 100);
    }
}