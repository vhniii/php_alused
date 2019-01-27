<?php
/**
 * @param $hostName
 * $param %dbUser
 * $param %dbPassword
 * %param %dbName
 * $return mysqli
 *
 */

function connect_to_db($hostName, $dbUser, $dbPassword, $dbName) {


    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

    if (!conn) {

        echo 'unable to connect to MySQL.<br>';
        echo mysqli_connect_error() . '<br>';
        exit;

    }

    return $conn;

}