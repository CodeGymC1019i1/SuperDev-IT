<?php

include_once "Class/Point.php";
include_once  "Class/MoveablePoint.php";

$point1 = new Point();
$moveablePoint = new MoveablePoint();
var_dump($moveablePoint);
$moveablePoint->setX(2);
$moveablePoint->setSpeed(3,3);
echo $moveablePoint->getSpeed();
echo $moveablePoint->toString();