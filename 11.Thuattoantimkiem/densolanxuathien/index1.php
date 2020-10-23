<?php
$nums = [];
for ($i = 0; $i < 100; ++$i) {
    $nums[$i] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . " ";
}
function findindex(array $number, int $value)
{
    $count = 0;
    
    for ($i = 0; $i < count($number); $i++) {
        if ($value == $number[$i]) {
            $count++;
        }
    }
    return $count;
}
$index = findindex($nums, 22);
echo "<br>";
echo $index;
