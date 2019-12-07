<?php
function maxMinAvg($arr) {
    $max = $arr[0];
    $min = $arr[0];
    $sum = 0;
    $arrNew = [];
    
    for ($i=0 ; $i<count($arr); $i++ ) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
            array_push($arrNew, $max);
        }
        
    for ($i=0 ; $i<count($arr); $i++ ) {
        if($arr[$i] < $min) {
            $min = $arr[$i];
            array_push($arrNew, $min);
        }
    for ($i=0 ; $i<count($arr); $i++ ) {
        $sum += $arr[$i];
    }
    $avg = $sum / count($arr);
    array_push($arrNew, $avg);

    return $arrNew; 
}