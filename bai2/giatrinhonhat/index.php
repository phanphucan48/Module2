<?php
$arr = array(10, 3, 4, 5, 6, 7);


class findMin
{
    function min($arr)

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

$indexArr = new findMin;

echo "gia tri nho nhat tai vi tri" .  $indexArr->min($arr);
