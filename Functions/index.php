<?php




function numbriKordamine($arv, $kontrollNumber){

    echo 'Arv on '. $arv . '<br>';

    $numberKokku = 0;

    while ($arv != 0) {

        $number = $arv % 10;

        if ($number == $kontrollNumber) {

            $numberKokku = $numberKokku +1;

        }

        $arv = $arv / 10;
        settype($arv, 'int');

    }

    echo 'Number '.$kontrollNumber.' esineb arvus '. $numberKokku. ' korda.<br>';

}



echo numbriKordamine(442158755745,5);
echo numbriKordamine(778692136544, 7);