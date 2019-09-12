<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "loginsystem";
$port = "3306";

//create connection

$conn = mysqli_connect( $server, $username, $password, $db, $port);

//check conn

if(!$conn) {
    
    die( "Connection Failed:" . mysqli_connect_error());
}

echo "Connected Successfully";

?>