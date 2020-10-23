<?php
function selection_sort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        $list = swap_positions($list, $i, $min);
    }
    return $list;
}
function swap_positions($data1, $left, $right)
{
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}

$arr = array(1, 9, 4.5, 6.6, 5.7, -4.5);
echo "mảng gốc :  <br>";
echo implode(', ', $arr) . "<br>";
echo "mãng đã xắp xếp : <br>";
echo implode(', ', selection_sort($arr)) . PHP_EOL;
