<?php
function selectionSort($list)
{
    $count = count($list);
    for($i=0;$i<$count;$i++)
    {
        $min =$i;
        for($j=0;$j<$count;$j++)
        {
            if($list[$j]<$list[$min])
            {
                $min = $j;
            }
        }
        $list = swap_position ($list,$i,$min);
    }
    return $list;
}

function swap_position($list1,$left,$right)
{
    $backup_old_data_right_value = $list1[$right];
    $list1[$right] = $list1[$left];
    $list1[$left] = $backup_old_data_right_value;
    return $list1;
}
$test = [3,1,-3,0,9,6,4];
print_r(selectionSort($test));
