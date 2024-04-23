<?php
// Hien thi n dong dau tien cua tam giac Floyd
$n = 5;
echo 'n = ' . $n. '<br>';
$count = 1;
for ($i=$n; $i > 0; $i--) { 
    for ($j=$i; $j < $n + 1; $j++) { 
        print($count . ' ');
        $count++;
    }
    echo '<br>';
}