<?php
// Xoa tat ca tru 0->9 A->Z a->z
$string = 'asvddsh$hfdh @avdg ) hd]} 377AJHD';
echo 'Old string : ' . $string .'<br>';
$newstr = preg_replace("/[^A-Za-z0-9]/", '', $string);
echo 'New string : ' . $newstr;