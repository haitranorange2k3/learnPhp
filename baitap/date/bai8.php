<?php
// Chuyen doi giay thanh ngay, gio, phut, giay
function convert_seconds($seconds) {
    $dt1 = new DateTime("@0");
    $dt2 = new DateTime("@$seconds");
    return $dt1->diff($dt2)->format('%a days, %h hours, %i minutes and %s seconds');
}
echo convert_seconds(200000000);