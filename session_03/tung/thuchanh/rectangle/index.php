<?php
    include_once "rectangle.php";
    $width = 20;
    $height = 30;

    $rectangle = new  Rectangle($width,$height);
    echo $rectangle->width;
    echo "<br>";
    echo $rectangle->height;
    echo "<br>";
    echo $rectangle->getArea();
    echo "<br>";
    echo $rectangle->getPerimeter();
    echo "<br>";
    echo $rectangle->disPlay();

?>