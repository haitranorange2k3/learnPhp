<?php
// Xoa ky hieu xuong dong 
$str1 = "The \n quick brown \n fox";
echo preg_replace('/\s+/', ' ', trim($str1)); 