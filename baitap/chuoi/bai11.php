<?php
// Xoa dau phay khoi chuoi so
$str1 ="2.454736,123";
$x = str_replace(',', '',$str1);
if (is_numeric($x)) {
    echo $x;
}