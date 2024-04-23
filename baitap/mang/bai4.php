<?php
// Tinh va hien thi nhiet do trung binh
$month_temp = "78, 48, 78, 90, 67, 67, 98, 77, 84, 67, 88, 86, 35, 67, 88, 60, 69";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach ($temp_array as $temp) {
    $tot_temp += $temp;
}

$avg_high_temp = $tot_temp/$temp_array_length;
echo 'List of five lowest temperatures : ';
for ($i=0; $i < 5; $i++) { 
    echo $temp_array[$i]. ' ,';
}
echo '<br>';
echo 'List f 5 highest temperatures  : ';
for ($i=($temp_array_length - 5); $i < ($temp_array_length); $i++) { 
    echo $temp_array[$i]. ' ,';
}