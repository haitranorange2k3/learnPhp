<?php
// Lay khoang cach giua 2 diem tren trai dat
function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo) {
    $pi = pi();
    $x = sin($latitudeFrom * $pi/ 180) *
    sin($latitudeTo * $pi/180) +
    cos($latitudeFrom * $pi/180) *
    cos($latitudeTo * $pi/180) *
    cos(($longitudeTo * $pi/180) - ($longitudeFrom*$pi/180));
    $x = atan((sqrt(1 - pow($x, 2)))/ $x);
    return abs((1.825 * 60.0 * (($x/$pi) * 180)) / 1.609344);
}

echo lat_long_dist_of_two_points(40.7172, 74.0059, 51.5072, 0.1275);