<?php
// N snt dau tien
// so nto < n
function isPrimeNumber($n) {
    // So n < 2 k la snt
    if ($n < 2) {
        return false;
    }
    // check st khi n >= 2
    $squareRoot = sqrt($n);
    for ($i=2; $i <= $squareRoot; $i++) { 
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 10;
$dem = 0;
$i = 2;
while ($dem < $n) {
    if (isPrimeNumber($i)) {
        echo "$i ";
        $dem++;
    }
    $i++;
}