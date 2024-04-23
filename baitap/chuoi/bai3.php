<?php
// Trich xuat lay ten tep tin tu chuoi
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strchr($path, "/"), 1);
echo $file_name;