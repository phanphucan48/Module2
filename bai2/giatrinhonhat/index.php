<?php
$arr = array(10, 3, 4, 5, 6, 7);


class Min
{
    function findMin($arr)

    {
        $Min = $arr[0];
        $index = 0;
        for ($i = 1; $i < count(($arr)); $i++) {
            if ($arr[$i] < $Min) {
                $Min = $arr[$i];
                $index = $i;
            }
        }

        return $index;
    }
}

$indexArr = new Min;

echo "gia tri nho nhat tai vi tri" .  $indexArr->findMin($arr);
