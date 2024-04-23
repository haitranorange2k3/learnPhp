<?php
// Viet chuong trinh tao 1 chuoi moi voi ky tu cuoi cung duoc them vao o phia truoc va phia sau cua 1 chuoi c do dai 1 hoac nhiu hon
function test($str) {
    $s = substr($str, strlen($str) - 1);
    return $s.$str.$s;
}

echo test("Red") .'<br>';
echo test("1") .'<br>';
echo test("Green") .'<br>';