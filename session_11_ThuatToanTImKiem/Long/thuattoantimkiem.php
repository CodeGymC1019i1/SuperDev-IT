<?php

function search (array $arr, int $num){
    $total = count($arr);

    for ($i =0; $i < $total; $i++){
        if ($arr[$i] === $num){
            return true;
        }
    }
    return false;

}

$arr = [1,23,42,55];

if (search($arr, 42)){
    echo "Found";
}
else{
    echo "Not Found";
}