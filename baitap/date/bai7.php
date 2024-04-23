<?php
// Thay doi thang dang so thanh ten thang
$month_num = 7;
$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
echo $month_name;