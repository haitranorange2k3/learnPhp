<?php
// Tim ky tu dau tien khac nhau giua 2 chuoi
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
echo "$str_pos : $str1[$str_pos], $str2[$str_pos]";