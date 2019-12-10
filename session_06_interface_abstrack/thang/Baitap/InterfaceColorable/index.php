<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once "Class/Shape/Circle.php";
include_once "Class/Shape/Cylinder.php";
include_once "Class/Shape/Rectangle.php";
include_once "Class/Shape/Square.php";
include_once "Class/Shape/ClassName.php";

$shapes[0] = new Circle("circle1", 2);
$shapes[1] = new Cylinder("cylinder1", 2, 4);
$shapes[2] = new Rectangle("rectangle1",4,2);
$shapes[3] = new Square("square1",2);

foreach (get_declared_classes() as $className) {
    if (in_array('Colorable', class_implements($className))) {
        $classUseInterfaceColorable = $className;
    }
}

foreach ($shapes as $shape)
    if($classUseInterfaceColorable == $shape->getClassName()) {
        echo $shape->howtoColor();
    }
else {
    echo $shape->name." ".$shape->calculateArea()."<br>";
}


