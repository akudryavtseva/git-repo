<?php
$n = 0;
echo "На 3 без остатка делятся числа: ";
while ($n <= 100) {
    if ($n % 3 == 0) {
        $str .= $n . ', ';
    }
    $n++;
}
echo substr($str, 0, -2);
