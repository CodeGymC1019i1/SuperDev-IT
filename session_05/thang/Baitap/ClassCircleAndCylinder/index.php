<?php

include_once "Class/Circle.php";
include_once "Class/Cylinder.php";

$circle = new Circle(2, 'blue');
$cylinder = new Cylinder(2, "red", 4);

echo $circle->calculateArea();
echo $circle->calculatePerimeter();
echo $circle->toString();
echo $cylinder->calculateArea();
echo $cylinder->calculateVolume();
echo $cylinder->toString();



