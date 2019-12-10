<?php

include_once "Class/Point2D.php";
include_once "Class/Point3D.php";

$point2d = new Point2D();
$point3d = new Point3D();

var_dump($point2d->getXY());
echo $point2d->toString();
var_dump($point3d->getXYZ());
echo $point3d->toString();
