<?php
// Tinh va in giai thua cua 1 so
$n = 6;
$x = 1;
for ($i=1; $i <= $n; $i++) { 
    $x *= ($i + 1);
}
echo "The factorial of $n = $x";