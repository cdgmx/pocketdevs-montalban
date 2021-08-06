<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$pocketdevs = "pocketdevs";
global $conn;


$conn = mysqli_connect($servername, $dbusername, $dbpassword, $pocketdevs);


if(!$conn) {
    echo "Connection failed!";
}




?>