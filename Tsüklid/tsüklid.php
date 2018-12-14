<?php

header('Refresh: 0.2');

// for tsükkel


/*  for ($jm = alg; $jm < lopp; $jm ++) {

    tegevused, mis sooritatakse
    nii kaua kui tsükli $jm väärtus
    on väiksem kui lõppväärtus.

}
 * */





echo '<h4>Tsüklid - for</h4>';



echo '<table>';

for($rida = 1; $rida <= 5; $rida++){
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,9));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';


echo '<hr>';




echo '<table style="border-collapse: collapse">';
// ülemine punane riba - algus - tühi kast
echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcyan">&nbsp;</th>';
// ülemine punane riba - numbrid 1-10
for($arv2 = 1; $arv2 <= 10; $arv2++){
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcyan">';
    echo $arv2;
    echo '</th>';
}
// põhitabel
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>'; // rea algus
    // üks punane kast
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcyan">';
    echo $arv1;
    echo '</th>';
    // korrutustabeli elemendid - korrutamise tulemused
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td style="width: 20px; text-align: center; border: solid 1px black;">';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>'; // rea lõpp
}
echo '</table>'; // tabeli lõpp
