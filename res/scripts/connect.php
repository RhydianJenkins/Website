<?php
$server = 'localhost';
$username = 'rlj';
$password = 'rlj';
$database = 'website_forum';

$con = mysql_connect($server, $username, $password);
$db = mysql_select_db($database, $con);

if (!$con) {
    exit('Error: could not establish database connection' . mysql_error());
}

if (!$db) {
    exit('Error: could not select the database' . mysql_error());
}
?>