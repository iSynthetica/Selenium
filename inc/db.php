<?php
$db_host = "sichena.mysql.ukraine.com.ua";
$db_name = "sichena_poland";
$db_login = "sichena_poland";
$db_password = "qybbc7ba";

$db = new mysqli($db_host, $db_login, $db_password, $db_name);
if($db->connect_errno) {
    // TODO: Make error page
}
//var_dump($db);

$result = $db->query('SELECT * FROM `pol_state`');

var_dump($result);