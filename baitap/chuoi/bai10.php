<?php
// Chon 5 tu dau tien cua 1 chuoi
$my_str = 'the quick brown fox THE QUICK BROWN FOX';
echo implode(' ', array_slice(explode(' ', $my_str), 0, 5));