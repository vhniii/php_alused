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
echo '24hr pärast on kell: '.date('d.m.Y G:i', time() + 60*60*24).'<br>';
