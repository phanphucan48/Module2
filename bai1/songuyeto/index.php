<?php
function SONT($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 0; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo ("cac so nguyen to tu 1 den 100");
for ($i = 1; $i <= 100; $i++) {
    if (SONT($i)) {
        echo ($i . "");
    }
}
