<?php
// Tim gia tri rieng le trong mang nhieu chieu
function array_flat($my_arr)
{
    $fa = array();
    $l = 0;
    foreach ($my_arr as $key => $value) {
        if (!is_array($value)) {
            $fa[] = $value;
            continue;
        }
        $l++;
        $fa = array_flat($value, $fa, $l);
        $l--;
    }
    if ($l == 0) {
        $fa = array_values(array_unique($fa));
    }
    return $fa;
}
$tmp = array(
    'a' => array(-1, -2, 0, 3, 2),
    'b' => array(
        'c' => array(-1, 0, 2, 0, 3)
    )
);
print_r(array_flat($tmp));