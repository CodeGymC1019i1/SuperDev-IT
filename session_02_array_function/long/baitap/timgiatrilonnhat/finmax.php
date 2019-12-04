<?php
$arr = [1,5,23,123,2222,2,2,56];

$max = $arr[0];

foreach ($arr as $value) {
    if ($max<$value) {
        $max = $value;
    }
}
echo $max;