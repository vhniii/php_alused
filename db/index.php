<?php

require_once 'conf.php';
require_once 'db_fnk.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
echo '<pre>';

    print_r($iktConn);

echo '</pre>';