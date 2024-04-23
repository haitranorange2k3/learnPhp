<?php
// Thay doi mau cua ky tu dau tien cua 1 tu

$text = "PHP Tutorial by Tran Van Hai
";
$text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);

echo $text;