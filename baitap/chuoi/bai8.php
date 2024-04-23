<?php
// In ky tu tiep theo cua 1 ky tu cho trc
$cha = 'a';
$next_cha = ++$cha;
if (strlen($next_cha) > 1) {
    $next_cha = $next_cha[0];
}
echo $next_cha;