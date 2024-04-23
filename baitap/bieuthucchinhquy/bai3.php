<?php
// Xoa khoang trang chuoi
$str1 = 'The quick   brown fox';
// echo $str1;
echo preg_replace('/\s+/', '', $str1);