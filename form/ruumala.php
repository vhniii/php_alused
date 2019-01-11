<?php


$pii = 3.14;
$r = $_GET['r'];
$h = $_GET['h'];

$Kera = 4/3 * $pii * $r*$r*$r;
$Koonuse_pp = $pii * ($r*$r);
$Koonus = $Koonuse_pp * $h * 1/3;
$Silinder = $pii * ($r*$r) * $h;

echo 'Kera ruumala on: '.$Kera.'<br>';
echo 'Koonuse ruumala on: '.$Koonus.'<br>';
echo 'Silindri ruumala on: '.$Silinder.'<br>';