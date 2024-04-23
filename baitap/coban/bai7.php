<?php
// Them chu if vao 1 chuoi
function test($s) {
    if (strlen($s) > 2 && substr($s, 0, 2) == "if") {
        return $s;
    }
    return "if ". $s;
}

echo test("if else") . '<br>';
echo test("else") . '<br>';