<?php

function findValue (array $arr, $value)
{
    $count = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($value == $arr[$i]) {
            echo "vi tri"." ".$i;
            $count++;
            echo "<br>";
        }
    }
    echo "count " . $count;
}

$arr = [1,45,123,123,555,3214,33,33];


findValue($arr, 123);