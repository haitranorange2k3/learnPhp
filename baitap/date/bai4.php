<?php
// Tinh so ngay giua 2 ngay
$to_date = time();
$from_date = strtotime("2021-01-31");
$day_diff = $to_date - $from_date;
echo floor($day_diff / (60 * 60 * 24));