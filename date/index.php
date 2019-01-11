<?php

echo 'Time = '.time().'<br>';
echo 'Date: '.date('d.m.Y G:i' , time()).'<br>';
echo 'Ajavöönd: '.date_default_timezone_get('Europe/Tallinn').'<br>';


echo date('d.F.Y').'<br>';

$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember' );


$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');

echo 'Eestipärane kuupäev: '.$paev.'.'.$kuu.'.'.$aasta.'<br>';