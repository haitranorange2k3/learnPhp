<?php
// Hien thi email trung
function array_not_unique($my_arr) {
    $same = array();
    natcasesort($my_arr);
    reset($my_arr);

    $old_key = null;
    $old_value = null;

    foreach ($my_arr as $key => $value) {
        if ($value == null) {
            continue;
        }
        if ($old_value == $value) {
            $same[$old_key] = $old_key;
            $same[$key] = $value;
        }
        $old_key = $key;
        $old_value = $value;
    }
    return $same;
}

$test_arr = array();
$test_arr[1] = 'xyz@gmail.com';
$test_arr[2] = 'xy1z@gmail.com';
$test_arr[3] = 'xyz@gmail.com';
$test_arr[4] = 'xy1z@gmail.com';
print_r(array_not_unique($test_arr));