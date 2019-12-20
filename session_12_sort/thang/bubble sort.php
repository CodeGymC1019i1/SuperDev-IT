<?php
function bubbleSort($list)
{
    $count = count($list);
    for($i=0;$i<$count;$i++)
    {
        for($j=$i+1;$j<$count;$j++)
        {
            if($list[$i]>$list[$j])
            {
                $temp =$list[$i];
                $list[$i] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    return $list;
}
$arr_test = [4,3,7,8,9,2,1,5];
$new_arr = bubbleSort($arr_test);
for ($i=0;$i<count($arr_test);$i++)
{
    echo $new_arr[$i] . "<br>";
}
