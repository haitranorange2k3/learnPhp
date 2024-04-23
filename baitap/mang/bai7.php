<?php
// Su dung ham shuffle() de tao 1 mk ngau nhien
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
    $pass_order = array();
    $passWord = '';

    // Create content of the password
    for ($i=0; $i < $upper; $i++) { 
        $pass_order[] = chr(rand(65, 90));
    }
    for ($i=0; $i < $lower; $i++) { 
        $pass_order[] = chr(rand(97, 122));
    }
    for ($i=0; $i < $numeric; $i++) { 
        $pass_order[] = chr(rand(48, 57));
    }
    for ($i=0; $i < $other; $i++) { 
        $pass_order[] = chr(rand(33, 47));
    }

    // Using shuffe() to shuffle the order
    shuffle($pass_order);

    // Final password string
    foreach ($pass_order as $char) {
        $passWord .= $char;
    }
    return $passWord;
}

echo "Generated Password : " . rand_Pass();