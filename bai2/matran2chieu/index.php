<?php
$mat = array(
    array(1, 2, 3, 4),
    array(25, 6, 7, 8),
    array(9, 10, 11, 12),
    array(13, 14, 15, 16)
);

function findMax($mat)
{
    $maxElement = PHP_INT_MIN;
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($mat[$i][$j] > $maxElement) {
                $maxElement = $mat[$i][$j];
            }
        }
    }
    return $maxElement;
}
echo findMax($mat);
