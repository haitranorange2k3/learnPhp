<?php
// LKe cac so fibo < n va la snt
// Tinh day so Fibonacci
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;

    if ($n < 0) {
        return - 1;
    } elseif ($n == 0 || $n == 1) {
        return $n;
    } else {
        for ($i=2; $i < $n; $i++) { 
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}

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

$n = 1000;
$i = 0;
while (fibonacci($i) < $n) {
    $fi = fibonacci($i);
    if (isPrimeNumber($fi)) {
        echo "$fi  ";
    }
    $i++;
}