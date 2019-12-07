<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPrimeter()
    {
        return (($this->height + $this->width) * 2);
    }
    public function display(){
        return "Rectangle {" . "width=". $this->width . ", height=". $this->height . "}";

    }
}
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->height;
echo "<br>";
echo $rectangle->width;
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPrimeter();
echo "<br>";
echo ("rectangle A ". $rectangle->display());