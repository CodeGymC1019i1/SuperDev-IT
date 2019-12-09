<?php

include_once "Shape.php";

class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;

    public function __construct($color = "black", $side1 = 1, $side2 = 1, $side3 = 1)
    {
        parent::__construct($color);
        $this->side1 = (double) $side1;
        $this->side2 = (double) $side2;
        $this->side3 = (double) $side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return int
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return int
     */
    public function getSide3()
    {
        return $this->side3;
    }

    public function getArea()
    {
        $halfPerimeter = $this->getPerimeter() / 2;
        return sqrt($halfPerimeter * ($halfPerimeter - $this->side1)
                                        * ($halfPerimeter - $this->side2)
                                        * ($halfPerimeter - $this->side3));
    }

    public function getPerimeter()
    {
        return $this->side3 + $this->side2 + $this->side1;
    }

    public function toString()
    {
        return "The triangle within:<br>".parent::toString()."<br>Area: ".$this->getArea()
                ."<br>Perimeter: ".$this->getPerimeter()."<br>";
    }

}