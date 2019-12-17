<?php

function FindNum(array $arr, $num)
{
    $low = 0;
    $high = count($arr)-1;


    while ($low <= $high) {
        $mid = (int)(($high + $low) / 2);
        if ($arr[$mid] < $num) {
            $mid++;
            $low = $mid;
        } else if ($arr[$mid] > $num) {
            $mid--;
            $high = $mid;
        } else {
            echo "Find";
            return true;
        }
    }
    echo "Not Find";
    return false;
}


$arr = range(1,200,5);

FindNum($arr, 25);
