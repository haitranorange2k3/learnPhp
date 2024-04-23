<?php
// Giai ma 1 chuoi JSON
function w3rfunction($value, $key) {
    if (is_array($value)) {
        array_walk_recursive($value, 'w3rfunction');
    } else {
        echo "$key : $value" . '<br>';
    }
}

$a = '{
    "Tittle" : "The Cuckoos Calling",
    "Author" : "Robert Galbraith",
    "Detail" : {
        "Publisher" : "Little Brown"
    }
}';

$j1 = json_decode($a, true);
array_walk_recursive($j1, "w3rfunction");

