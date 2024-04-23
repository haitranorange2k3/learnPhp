<?php
// Kiem tra 2 so nguyen
function test($x, $y) {
    return ($x == 30) || ($y == 30) 
    || ($x + $y == 30);
}

var_dump(test(30, 0));
var_dump(test(30, 1));