<?php
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

for ($i=0; $i < 20; $i++) { 
    echo (fibonacci($i). ' ');
}