<?php
// Kiem tra so nguyen to
function isPrimeNumber($n) {
    // So nguyen n < 2 khong phai la SNT
    if ($n < 2) {
        return false;
    }
    // Check snt khi n >= 2
    $squareRoot = sqrt($n);
    for ($i=2; $i <= $squareRoot; $i++) { 
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i=0; $i < 100; $i++) { 
    if (isPrimeNumber($i)) {
        echo "$i  ";
    }
}