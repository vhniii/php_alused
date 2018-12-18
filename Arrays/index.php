<?php

$kasutajad = array(); // Tühi massiiv

//Tühja massiivi andmete lisamine

$kasutajad[] = 'Alice';
$kasutajad[] = 'Bob';

array_push($kasutajad, 'lucy');

// Andmetega massiiv

$lisaKasutajad = array('Mark', 'Geoff');

// Massiivi pikkus

$kasutajadKokku = count($kasutajad);
for ($i = 0; $i < $kasutajadKokku; $i++){

    echo $kasutajad[$i].'<br>';

}

array_shift($kasutajad);
for ($i = 0; $i < count($kasutajadKokku); $i++){

    echo $kasutajad[$i].'<br>';

}

echo '<br>';

$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);

for ($i = 0; $i < count($uuedKasutajad); $i++){

    echo $uuedKasutajad[$i].'<br>';

}


echo '<hr>';

foreach($uuedKasutajad as $kasutaja){

    echo $kasutaja.'<br>';

}

//var_dump($kasutajad);