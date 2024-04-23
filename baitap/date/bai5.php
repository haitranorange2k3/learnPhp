<?php
// Lay ngay dau, ngay cuoi cua thang tu 1 ngay
$dt = '2020-02-23';
echo 'First day : ' . date("Y-m-01", strtotime($dt)) . ' - Last day : ' . date("Y-m-t", strtotime($dt));