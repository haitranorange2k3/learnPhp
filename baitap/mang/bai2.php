<?php
// Xoa 1 phan tu khoi 1 mang
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo '<pre>';
print_r($x);
var_dump($x);
