<?php
// Sap xep cac chu cai dac biet

function enity_sort($my_arr) {
    $total = count($my_arr);
    for ($i=0; $i < $total; $i++) { 
        if ($my_arr[$i][0] == '&') {
            $my_arr[$i] = $my_arr[$i][1].$my_arr[$i];
        } else {
            $my_arr[$i] = $my_arr[$i][0].$my_arr[$i];
        }
    }

    sort($my_arr);
    for ($i=0; $i < $total; $i++) { 
        $my_arr[$i] = substr($my_arr[$i], 1);
    }
    return $my_arr;
}

$arr = array(" ", "&", "<");
print_r(enity_sort($arr));