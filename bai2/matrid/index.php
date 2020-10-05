<?php
$mat = array(
    array(1, 2, 3, 4),
    array(25, 6, 7, 8),
    array(9, 10, 11, 12),
    array(13, 14, 45, 16)
);

function findMax($mat)
{
    $maxElement = $mat[0][0];
    for ($i = 0; $i < count($mat); $i++) {
        for ($j = 0; $j < count($mat); $j++) {
            if ($mat[$i][$j] > $maxElement) {
                $maxElement = $mat[$i][$j];
            }
        }
    }
    return $maxElement;
}
echo findMax($mat);
