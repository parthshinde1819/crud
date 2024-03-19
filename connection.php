<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "codeseed";
$connection = mysqli_connect($hostname, $username, $password, $database);
if(!$connection)
{
    echo "not connected";
}

?>