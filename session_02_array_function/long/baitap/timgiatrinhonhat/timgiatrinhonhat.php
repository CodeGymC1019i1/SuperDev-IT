<?php

$arr = [1,2,3,5,0,345,123];
function findMinArr($arr) {
$min = $arr[0];
foreach ($arr as $value ) {
    if ($min > $value) {
        $min =$value;

    }

} echo $min;
    }
findMinArr($arr);


?>