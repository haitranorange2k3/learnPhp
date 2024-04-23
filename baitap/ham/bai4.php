<?php
// Chuyen doi 1 so tn o he so 10 thanh 1 so o he co so B
function covertNumber($n, $b) {
    if ($n < 0 || $b < 2 || $b > 16) {
        return ' ';
    }
    $result = "";
    $m = 0;
    $remainder = $n;
    while ($remainder > 0) {
        if ($b > 10) {
            $m = $remainder % $b;
            if ($m >= 10) {
                $result = $result . chr(55 + $m);
            } else {
                $result .= $m;
            }
        } else {
            $result .= ($remainder % $b);
        }
        $remainder = floor($remainder / $b);
    }
    return strrev($result);
}

$n = 30;
echo "So $n bin2 = " . covertNumber($n, 2) . '<br>';
echo "So $n bin16 = " . covertNumber($n, 16);