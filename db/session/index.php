<?php

session_start();
require_once 'func.php';




if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['last_name'].'!<br>';
    echo '<a href="../logout.php">Logi välja</a>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}