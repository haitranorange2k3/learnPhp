<?php
// Xoa ky tu o mot vi tri cua chuoi
function test($s, $n) {
    return substr($s, 0, $n).substr($s, $n+1, strlen($s)-$n);
}

echo test("Python", 1). '<br>';
echo test("Python", 0). '<br>';
echo test("Python", 4). '<br>';