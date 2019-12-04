<?php
$arr = [
    [1,5,23,123,2222,2,2,56],
    [23,23,213,45,23,43,]
];

$max = $arr[0][0];
for ($i=0;$i < count($arr); $i++) {

    for ($j=0; $j < count($arr[$i]); $j++)
    {
        var_dump( $arr[$i]);
        if ($max < $arr[$i][$j]){
            $max = $arr[$i][$j];
        }
    }
}
echo  $max;