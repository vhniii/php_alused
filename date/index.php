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



echo 'Ülesanne 8<br><br>';

echo date('d.m.Y G:i' , time()).'<br>';

$eesti_np = array(
    'Mon' => 'Esmaspäev',
    'Tue' => 'Teisipäev',
    'Wed' => 'Kolmapäev',
    'Thu' => 'Neljapäev',
    'Fri' => 'Reede',
    'Sat' => 'Laupäev',
    'Sun' => 'Pühapäev'
);

$nadalapaev = $eesti_np[date('D')];


//echo 'N:'.date('D', $eesti_np);
echo 'N:'.$nadalapaev.'<br>';

echo 'Eestikeelne kuupäev koos nädalapäevaga: '.$paev.'.'.$kuu.'.'.$aasta.', '.$nadalapaev.'<br><br>';

$tana = time();

//$jaanipaev = (date('d.m.Y', '24.06.2019'));
$jaanipaev = strtotime("24 June 2019");

$vahe = $jaanipaev - $tana;

echo date('Y', time()).'.aasta jaanipäevani on jäänud '.round($vahe / (60*60*24)).' päeva!<br><br>';


$metsheina_sp = mktime(0,0,0,11,06,1980);
$minu_sp = mktime(0,0,0,06,02,1999);

$metsheina_spd = date('d.m.Y', $metsheina_sp);
$minu_spd = date('d.m.Y', $minu_sp);

$vahe = ($minu_sp - $metsheina_sp);

$vanusevahe = ($vahe / (60 * 60 * 24 * 365));




echo  'Metsheina sünnikuupäev on: '.$metsheina_spd.', minu sünnikuupäev on: '.$minu_spd.'. Vanusevahe on: '.number_format($vanusevahe, 1).'<br><br>';


if (checkdate(02,29,2016)) {

    echo '29.02.2016 oleks olnud võimalik maailmalõpu saabumine!<br><br>';

} else {

    echo '29.02.2016 ei oleks olnud maailmalõpu saabumine võimalik!<br><br>';

}


/* Kas mul on järgmine aasta juubel? */


$yr = date('Y', time());
$nxtyr = $yr + 1;

$vanusnxtyr = $nxtyr - date('Y', mktime(0,0,0,6,2,1999));

//echo $nxtyr - date('Y', mktime(0,0,0,6,2,1999));

echo 'Praegu on aasta: '.$yr.'<br>';
echo 'Järgmine aasta on: '.$nxtyr.'<br>';


$vanusnxtyr = (string)$vanusnxtyr;

if ($vanusnxtyr[strlen($vanusnxtyr)-1] == 0 or $vanusnxtyr[strlen($vanusnxtyr)-1] == 5){

    echo 'Järgmisel aastal olen ma '.$vanusnxtyr.' aastane ning mul on juubel.';

} else {

    echo 'Järgmisel aastal olen ma '.$vanusnxtyr.' aastane ning mul ei ole juubelit.';

}

echo '<br><br><br><br>';

if (date('G:i', time()) > '08:00') {

    echo 'Praeguse aja järgi on tervitus järgnev:   Tere hommikust!';

} elseif (date('G:i', time()) > '13:00') {

    echo 'Praeguse aja järgi on tervitus järgnev:   Tere päevast!';

} elseif (date('G:i', time()) > '17:00') {

    echo 'Praeguse aja järgi on tervitus järgnev:   Tere õhtust!';

}


