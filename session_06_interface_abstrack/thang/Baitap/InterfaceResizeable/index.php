<?php

include_once "Class/Shape/Circle.php";
include_once "Class/Shape/Rectangle.php";
include_once "Class/Shape/Square.php";

$shapes[0] = new Circle("Circle", 4);
$shapes[1] = new Rectangle("Rectangle", 2, 4);
$shapes[2] = new Square("Square", 3);

foreach ($shapes as $shape)
    echo $shape->name." with area before: ".$shape->calculateArea()." and after: "
        .$shape->resize(mt_rand(0,100))."<br>";
