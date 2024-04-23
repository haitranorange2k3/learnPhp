<?php
// Thay the ki tu dau tien bang ky tu khac
$str = 'the quick brown fox';
echo preg_replace('/the/', 'That', $str, 1);