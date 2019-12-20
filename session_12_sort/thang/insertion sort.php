<?php
function insertionSort($list)
{
    for($i = 0;$i < count($list);$i++)
    {
        $var = $list[$i];
        $j = $i -1;
        while($j>=0&&$list[$j]>$var)
        {
            $list[$j+1] = $list[$j];
            $j--;
        }
        $list[$j+1]=$var;
    }
    return $list;
}
$arr_test = [5,4,6,9,2,7];
print_r( insertionSort($arr_test));
