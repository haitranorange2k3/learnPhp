<?php
// Kiem tra 1 chuoi co chua 1 chuoi khac
$pattern = '/[^\w]fox\s/';
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')) {
    echo "'fox' is present ... ";
} else {
    echo "'fox' is not present ...";
}