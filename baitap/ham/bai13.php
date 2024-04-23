<?php
// kiem tra chuoi co chu thg 
function is_str_lowercase($str1) {
    for ($scc=0; $scc < strlen($str1); $scc++) { 
        if (ord($str1[$scc]) >= ord('A')
        && ord($str1[$scc]) >= ord('Z')) {
            return false;
        }
    }
    return true;
}

var_dump(is_str_lowercase('jasdjkhas ahkhs hsjkah '));
var_dump(is_str_lowercase('jasdjkhas JHDhdhJKJ hsjkah '));