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

function query($sql, $conn){
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }
    return $result;
}
function getData($sql, $conn)
{
    $data = array();
    $result = query($sql, $conn);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}