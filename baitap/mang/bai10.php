<?php
// Tron 2 mang co gia tri khong trung
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$result = implode(",", array_unique(array_merge(explode(",", $list1), explode(",", $list2))));
echo $result;