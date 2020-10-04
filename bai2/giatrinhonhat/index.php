<?php
$arr = array(10, 3, 4, 5, 6, 7);
$min = $arr[0];
$index = 1;


for ($i = 1; $i < count(($arr)); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
        $index = $i + 1;
    }
}




echo "gia tri nho nhat la" . $min . "vi tri : " . $index;
