<?php
ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "demosite_demophp";
$db['db_pass'] = "sYgbhZlAxW]9";
$db['db_name'] = "demosite_demophp";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);




?>
