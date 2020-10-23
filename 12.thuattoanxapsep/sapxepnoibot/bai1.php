<?php
$arr = array(2, 3, 2, 5, 6, 1, -2, 3, 14, 12);

function sapxepchon($arr)
{
    $count = count($arr);
    $temp = 0;
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
    // for ($i = 0; $i < $count; $i++) {
    //     return $arr[$i] . " ";
    // }
}
echo "mảng gốc :  <br>";
echo implode(', ', $arr) . "<br>";
echo "mảng sắp xếp nổi bọt : <br>";
$arr1 = sapxepchon($arr);
echo implode(', ', $arr1) . PHP_EOL;
