<?php

session_start();

require_once 'login_func.php';



if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['surname'].'!<br>';
    echo '<a href="/logout.php">Logi välja</a>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}