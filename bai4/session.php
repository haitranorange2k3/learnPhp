<?php
session_start();
$_SESSION['name'] = 'Teo';
echo $_SESSION['name'];
// Huy 1 bien nao do
unset($_SESSION['name']);
// Huy tat ca session
session_destroy();
?>