<?php
$arr = array(5, -4, 3, 7, 2, 1, 0, 8, 9, 2);
function insertion_Sort($my_array)
{
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i];
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}
echo "mảng gốc : <br>";
echo implode(', ', $arr);
echo "mảng đã xắp xếp chèn : <br>";
echo implode(",", insertion_Sort($arr));
