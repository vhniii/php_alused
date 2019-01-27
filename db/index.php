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


session_start();

require_once 'login_func.php';



if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['surname'].'!<br>';
    echo '<a href="acts/logout.php">Logi välja</a>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}