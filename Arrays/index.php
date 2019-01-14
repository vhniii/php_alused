<?php
$kasutajad = array(

    array(

        'alice',
        'Alice',
        'Liddell',
        'female'
    ),

    array(

        'bob',
        'Bob',
        'Scott',
        'male'

    )


);

echo '<table style="border: 1px solid #000; border-collapse: collapse; padding: 5px 10px;">';
echo '<th style="border: 1px solid #000; padding: 5px 10px;">Kasutaja</th>';
echo '<th style="border: 1px solid #000; padding: 5px 10px;">Nimi</th>';
echo '<th style="border: 1px solid #000; padding: 5px 10px;">Eesnimi</th>';
echo '<th style="border: 1px solid #000; padding: 5px 10px;">Sugu</th>';


for ($i = 0; $i < count($kasutajad); $i++) {
    echo '<tbody>';
    echo '<tr>';


    foreach ($kasutajad[$i] as $info) {
        echo '<td style="border: 1px solid #000; padding: 5px 10px;">';
        if ($kasutajad[$i][3] == 'female'){

            echo '<div style="color: red;">';
        } else {

            echo '<div style="color: blue;">';

        }

        echo $info.'<br>';
        echo '</td>';

    }
    echo '</tr>';
    echo '</tbody>';
    echo '<hr>';
    echo '</table>';

}

echo '</table>';


$kliendid = array("Kristjan", "Kalle");
$kliendid [] = "Malle";



echo 'Meie kliendid on: ';

for ($i = 0; $i < count($kliendid); $i++) {

    if ($i == 2) {

        echo $kliendid[$i].'.';
    } else {

        echo $kliendid[$i].', ';
    }

}


echo '<br>';


$car = array(

    mark=>"Audi",
    mudel=>"A6",
    aasta=>"96",
    mootor=>"2.5TDI",
    voimsus=>"85kw"

);

echo '<br>';

print $car[mark].' '.$car[mudel].'<br>'.$car[mootor].' '.$car[voimsus].', '.$car[aasta].'a';