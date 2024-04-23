<?php
// Liet ke snt co 5 chu so
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

$count = 0;
for ($i=101; $i < 999; $i += 2) { 
    if (isPrimeNumber($i)) {
        echo "$i   ";
        $count++;
    }
}

echo "<br> Count = " . $count;