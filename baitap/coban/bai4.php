<?php
// Kiem tra mot so nguyen tru 100 hoac 200 thi nho hon hoac bang 10
function test($x) {
    if (abs($x - 100) <= 10 || abs($x - 200) <= 10) {
        return true;
    } return false;
}

var_dump(test(103));