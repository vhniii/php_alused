<?php

require 'conf.php';
require 'db_func.php';

$username = $_GET['uname'];
$password = $_GET['upass'];


$ikt = connect_to_db(DBHOST, DBUSER, DBPASS, DBNAME);

$sql = 'SELECT * FROM users WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);


if($users !== false){
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: ../index.php');
}