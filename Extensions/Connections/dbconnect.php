<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "data";

$GLOBALS['con'] = new mysqli($host, $username,$password, $db_name);

// check error connection
if ($GLOBALS['con'] -> connect_errno){
    echo "Failed to connect to MySQL: " .$GLOBALS['con'] -> Connect_error;
    exit();
    echo "stat";
}