<?php
include "Rectangle.php";
include "Circle.php";
include "Square.php";
include "Rectangle.php";

$circle = new Circle("circle",10);
echo "Circle before resize = ". $circle->radius."<br>";
$circle->resize(30);
echo "Circle after resize = ". $circle->radius."<br>";


$rectangle = new Rectangle("rectangle",10,20);
echo "rectangle before resize has width = " . $rectangle->width . ", height = " . $rectangle->height."<br>";
$rectangle->resize(20);
echo "rectangle after resize has width = " . $rectangle->width . ", height = " . $rectangle->height."<br>";