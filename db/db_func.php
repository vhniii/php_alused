<?php

/**
 * @param $hostName
 * @param $dbUser
 * @param $dbPass
 * @param $dbName
 * @return mysqli
 *
 */


function connect_db ($hostName, $dbUser,  $dbPass, $dbName)
{

    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);


    if (!conn) {

        echo 'unable to connect to MySQL<br>';
        echo mysqli_connect_error() . '<br>';
        exit;

    }

    return $conn;


}