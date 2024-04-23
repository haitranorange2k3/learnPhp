<?php
// Tim so thuan nghich
define("DEC_10", 10);
function isThuanNghich($n) {
    // ptich so n thanh cac chu so va luu vao $arrNumbers
    $arrNumbers = array();
    $count = 0;

    do {
        $arrNumbers[$count] = $n % DEC_10;
        $count++;
        $n = floor($n / DEC_10);
    } while ($n > 0);
    // Kiem tra tinh thuan nghich
    $size = count($arrNumbers);
    for ($i=0; $i < ($size / 2); $i++) { 
        if ($arrNumbers[$i] != $arrNumbers[$size - $i - 1]) {
            return false;
        }
    }
    return true;
}

$count = 0;
for ($i=1000; $i < 10000; $i++) { 
    if (isThuanNghich($i)) {
        echo ($i . ' ');
        $count++;
    }
}

echo "Count = ($count)";