<?php

require_once 'conf.php';
require_once 'db_func.php';

$iktconn = connect_to_db('DBHOST', 'DBUSER', 'DBPASS', 'DBNAME');

$sql = 'UPDATE users SET surname="Ebatavaline" WHERE user_id=1';
$res = query($sql, $iktconn);
// select tüüpi sql testimine
$sql = 'SELECT * FROM users';
$users = getData($sql, $iktconn);


echo '<pre>';
//print_r($iktconn);

print_r($users);

echo '</pre>';

echo 'Tere, '.$users[0]['forename'].' '.$users[0]['surname'].'<br>';


require_once 'fnk.php';

$loginForm = htmlFromFile('login');

echo $loginForm;