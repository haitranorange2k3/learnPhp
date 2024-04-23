<?php
// Trich xuat noi dung trong []
$my_text = 'The quick brown [fox]';
preg_match('#\[(.*?)\]#', $my_text, $match);
print $match[1];