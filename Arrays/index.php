<?php

$kasutajad = array(); // Tühi massiiv

//Tühja massiivi andmete lisamine

$kasutajad[] = 'Alice';
$kasutajad[] = 'Bob';

array_push($kasutajad, 'lucy');


// Andmetega massiiv

$lisaKasutajad = array('Mark', 'Geoff');


echo '<pre>';
print_r($kasutajad);
print_r($lisaKasutajad);
echo '</pre>';

//var_dump($kasutajad);