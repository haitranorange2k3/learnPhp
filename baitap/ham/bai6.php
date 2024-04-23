<?php
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

$n = 100;
if ($n > 2) {
    echo 2;
}
for ($i=3; $i < $n; $i += 2) { 
    if (isPrimeNumber($i)) {
        echo " $i";
    }
}