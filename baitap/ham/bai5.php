<?php
// Tim USCLN va BCNN
function USCLN($a, $b) {
    if ($b == 0) {
        return $a;
    } 
    return USCLN($b, $a % $b);
}
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}

$a = 15;
$b = 40;
echo "USCLN : " . USCLN($a, $b) . '<br>';
echo "BSCNN : " . BSCNN($a, $b) . '<br>';