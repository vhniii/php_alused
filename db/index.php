<?php

require_once 'conf.php';
require_once 'db_func.php';


$iktconn = connect_db('DBHOST', 'DBUSER', 'DBPASS', 'DBNAME');

echo '<pre>';
print_r($iktconn);
echo '</pre>';