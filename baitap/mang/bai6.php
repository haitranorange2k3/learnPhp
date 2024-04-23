<?php
// Sap xep 1 mang bang cach s thu tu khong phan biet Hoa , thuong
$color = array(
    "color1", "color20", "color3", "color2"
);

sort($color, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($color as $key => $value) {
    echo "Colors[$key] = $value <br>";
}