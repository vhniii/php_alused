<?php

echo 'Time = '.time().'<br>';
echo 'Date: '.date('d.m.Y G:i' , time()).'<br><br>';
echo 'Ajavöönd: '.date_default_timezone_get('Europe/Tallinn').'<br><br>';


echo date('d.F.Y').'<br>';

$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember' );


$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');

echo 'Eestipärane kuupäev: '.$paev.'.'.$kuu.'.'.$aasta.'<br>';


$a = mktime(0,0,0,10,22,1995-25);
echo 'Muu soovitud kuupäeva genereerimine: '.date('d.m.Y', $a).'<br><br>';


echo '1min pärast on kell: '.date('d.m.Y G:i', time() + 60).'<br>';
echo '1hr pärast on kell: '.date('d.m.Y G:i', time() + 60*60).'<br>';
echo '24hr pärast on kell: '.date('d.m.Y G:i', time() + 60*60*24).'<br><br>';


$arv1 = 10;
$arv2 = 54;
$arv3 = 22;

$aasta = 2018;
$aasta2 = 2017;


if (checkdate($arv2, $arv1, $aasta)) {

    echo ('Kuupäev korras!<br>');
    
} else {

    echo('Kuupäev on valesti sisestatud! ['.$arv2.'.'.$arv1.'.'.$aasta.']'.'<br><br>');



}

if (checkdate($arv1, $arv3, $aasta2)) {

    echo ('Kuupäev korras! ['.$arv1.'.'.$arv3.'.'.$aasta2.']'.'<br><br>');

} else {

    echo('Kuupäev on valesti sisestatud!<br>');

}

if (checkdate($arv3, $aasta2, $aasta)) {

    echo ('Kuupäev korras!<br>');

} else {

    echo('Kuupäev on valesti sisestatud! ['.$arv3.'.'.$arv2.'.'.$aasta.']'.'<br><br>');

}