<?php
// Doi ky tu dau tien va ky tu cuoi cung trong 1 chuoi
function test($str) {
    return strlen($str) > 1 ? substr($str, strlen($str) - 1).substr($str, 1, strlen($str) - 2).substr($str, 0, 1) :$str;

}

echo test("abcd") . '<br>';
echo test("a") . '<br>';
echo test("xy") . '<br>';