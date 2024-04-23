<?php
// Xoa 1 phan tu cua chuoi
$sub_string = 'haii@';
$str = 'haii@gmail.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) {
    $str = substr($str, strlen($sub_string));
}

echo $str;