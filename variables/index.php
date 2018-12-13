<?php


// Muutujate defineermine

// $[muutujanimi] = [väärtus];


$taisArv = 7;
$reaalArv = 3.14;
$sone = '7';
$toevaartusTrue = true;
$toevaartusFalse = False;


echo 'Täisarv = '.$taisArv.'<br>';
echo 'Reaalarv = '.$reaalArv.'<br>';
echo 'Sõne = '.$sone.'<br>';
echo 'Tõeväärtus true = '.$toevaartusTrue.'<br>';
echo 'Tõeväärtus false = '.$toevaartusFalse.'<br>';


echo 'Muutuja "sõne" andmetüüp on: '.gettype($sone).'<br>';
$summa = $sone + $sone.'<br>';
echo 'Vastus = '.$summa.'<br>';


echo gettype($sone).'<br> ';
settype($sone, 'int').'<br>';

echo 'Andmetüüp on: '.gettype($sone);

