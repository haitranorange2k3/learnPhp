<?php
// Tach 1 chuoi
$str1 = '031385';
echo substr(chunk_split($str1, 2, ':'), 0, -1);