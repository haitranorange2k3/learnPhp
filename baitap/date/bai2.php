<?php
// Chuyen doi ngay 
$odate = "2024-09-12";
echo $odate. '<br>';
$newDate = date("d-m-Y", strtotime($odate));
echo $newDate;