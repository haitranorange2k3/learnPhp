<?php
// Thay the nhieu ky tu tu 1 chuoi
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:&*?"<>|+-'),' ', $my_str);