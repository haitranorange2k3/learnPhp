<?php
// Tao mk ngau nhien 
function password_generte($chars) {
    $data = '1234567890qwertyuioplkjhgfdsamnbvcxzQWERTYUIOPLKJHGFDSAZXCVBNM';
    return substr(str_shuffle($data), 0, $chars);
}
echo password_generte(7);