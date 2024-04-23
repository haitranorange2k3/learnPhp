<?php
// Tinh giai thua cua n
$a = 5;
$b = 0;
$c = 10;

function tinhGiaiThua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for ($i=2; $i <= $n; $i++) { 
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}

echo "$a ! = " . tinhGiaiThua($a) . '<br>';
echo "$b ! = " . tinhGiaiThua($b) . '<br>';
echo "$c ! = " . tinhGiaiThua($c) . '<br>';