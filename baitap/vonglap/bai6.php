<?php
// In ra cac so tu 1 -> 100
for ($i=1; $i < 100; $i++) { 
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Fizz3&&5 : $i". ', ';
    } elseif ($i % 3 == 0) {
        echo "Fizz3 : $i". ', ';
    } elseif ($i % 5 == 0) {
        echo "Fizz5 : $i". ', ';
    } 
}