<?php
// Lay su khac biet tuyet doi giua N va 51
function test($n) {
    $x = 51;
    if ($n > $x) {
        return ($n - $x) * 3;
    }
    return $x - $n;
}

echo test(53) . '<br>';
echo test(5) . '<br>';
echo test(55) . '<br>';

?>