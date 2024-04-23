<?php
// Hien thi gia tri cua mang
$color = array('white', 'green', 'red');
foreach ($color as $items) {
    echo "$items, ";
}

sort($color);
echo "<ul>";
foreach ($color as $i) {
    echo "<li>$i</li>";
}
echo "</ul>";