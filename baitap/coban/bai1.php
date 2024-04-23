<?php
// Tong 2 so nguyen
function test($x, $y) {
    return $x = $y ? ($x + $y) * 3 : $x + $y;
}

echo test(1, 2) . '<br>';
echo test(10, 2) . '<br>';
echo test(1, 20) . '<br>';
?>