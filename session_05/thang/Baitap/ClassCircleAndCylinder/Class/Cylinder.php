<?php

include_once "Circle.php";

class Cylinder extends Circle
{
    protected $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function calculateArea()
    {
        return 2 * 3.14 * $this->radius * ($this->radius + $this->height);
    }

    public function calculateVolume()
    {
        return 3.14 * ($this->radius ** 2) * $this->height;
    }
    public function toString()
    {
        return "Radius: ".$this->radius." Height: ".$this->height." Color: ".$this->color."<br>";
    }
}