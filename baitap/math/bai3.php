<?php
// Tao ngau nhien 11 ky tu bao gom so va chu
$x = rand(10e12, 10e16);
echo base_convert($x, 10, 36);