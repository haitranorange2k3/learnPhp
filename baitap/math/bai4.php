<?php
// Lay so thuc ngau nhien
function rand_float($st_num = 0, $end_num = 1, $mul = 1000000) {
    if ($st_num > $end_num) {
        return false;
    }
    return mt_rand($st_num * $mul, $end_num * $mul) / $mul;
}
echo rand_float() . '<br>';
echo rand_float(0.6) . '<br>';
echo rand_float(0.5,0.6) . '<br>';
echo rand_float(0,20) . '<br>';
echo rand_float(0,3,2) . '<br>';
echo rand_float(0,2,20) . '<br>';