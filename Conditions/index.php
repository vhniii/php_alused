<?php



// Tingimuslaused


/*if ([tingimus]) {
    [Tegevused, mis toimuvad kui tingimus kehtib]
} else {

    [Tegevused, mis toimuvad kui tingimus ei kehti]
}*/

echo '<h4>Tingimuslaused</h4>';

$arv = rand(0, 100);

if ($arv >= 0 and $arv < 25) {

    // Roheline
    $varv = green;

    // Antud arv on paaris ja roheline
    echo '<p style="color: '.$varv.'">'.$arv.'</p>';

} elseif ($arv >= 25 and $arv < 50) {

    // Punane
    $varv = red;

    echo '<p style="color: '.$varv.'">'.$arv.'</p>';

} elseif ($arv >= 50 and $arv < 75) {

    // Sinine
    $varv = blue;

    echo '<p style="color: '.$varv.'">'.$arv.'</p>';

} elseif ($arv >= 75 and $arv < 100) {

    // Orange
    $varv = orange;

    echo '<p style="color: '.$varv.'">'.$arv.'</p>';

} else {


    echo '<p>'.$arv.'</p>';

}