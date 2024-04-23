<?php
// Tao capcha tu chuoi
function random_string($length = 5) {
    $result = '';
    $chars = 'sjfjsdjflioexncvklerjirihfksdfj';
    for ($x=0; $x < $length; $x++) { 
        $result .= ($x%2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
    }

    return $result;
}

echo random_string();