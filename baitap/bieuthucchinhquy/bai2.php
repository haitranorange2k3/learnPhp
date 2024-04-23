<?php
// Xoa tu cuoi cung cua 1 chuoi
$str1 = 'The quick brown fox';
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1);
