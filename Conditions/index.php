<?php



// Tingimuslaused


/*if ([tingimus]) {
    [Tegevused, mis toimuvad kui tingimus kehtib]
} else {

    [Tegevused, mis toimuvad kui tingimus ei kehti]
}*/

echo '<h4>Tingimuslaused</h4>';

$varv = ['punane', 'kollane', 'roheline', 'must'];

//$foor = "punane";
$foor = $varv[random_int(0,3)];

switch($foor) {

    case 'punane':
        echo '<p style="font-size: 25px; text-transform: uppercase; color: red;">Stop!</p>';
        break;

    case 'kollane':
        echo '<p style="font-size: 25px; text-transform: uppercase; color: yellow">Valmis olla!</p>';
        break;

    case 'roheline':
        echo '<p style="font-size: 25px; text-transform: uppercase; color: green">Minek!</p>';
        break;

    default:
        echo '<p style="font-size: 25px; text-transform: uppercase;"> Sellist värvi fooris ei ole!</p>';
        break;
}