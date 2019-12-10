<?php

include "Class/CircleComparator.php";
include_once "Class/Circle.php";

$circleOne = new Circle('circleOne', 8);
$circleTwo = new Circle('circleTwo', 2);
$compare2Circle = new CircleComparator();

var_dump($compare2Circle->compare($circleOne, $circleTwo));
