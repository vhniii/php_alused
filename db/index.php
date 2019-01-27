<?php

require_once('db_func.php');
require_once('conf.php');

//$iktconn = connect_to_db('localhost', 'rasmusla_user', 'password123', 'rasmusla_php');
$iktconn = connect_to_db('DBHOST', 'DBUSER', 'DBPASS', 'DBNAME');
echo '<pre>';
print_r($iktconn);
echo '</pre>';
