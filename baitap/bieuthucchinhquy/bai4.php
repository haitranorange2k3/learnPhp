<?php
// Xoa cac ky tu k phai so tru day phay va dau cham
$str1 = "$12, 334.00A";
echo preg_replace('/[^0-9,.]/', '', $str1);