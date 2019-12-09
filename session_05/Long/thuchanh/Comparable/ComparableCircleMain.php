<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle('CircleOne',8);
$circleTwo = new ComparableCircle('CircleTwo',2);

var_dump($circleOne->compareTo($circleTwo));