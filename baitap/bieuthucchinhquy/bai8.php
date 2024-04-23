<?php
$sdate ="1981-11-04";
$edate = "2024-09-04";

$date_diff = abs(strtotime($edate) - strtotime($sdate));

$year = floor($date_diff / (365*60*60*24));
$month = floor(($date_diff - $year * (365*60*60*24)) / (30*60*60*24));
$days = floor(($date_diff - $year * (365*60*60*24) - $month * (30*60*60*24)) / (1*60*60*24));
print($year.' years - '.$month.' months - '.$days.' days');