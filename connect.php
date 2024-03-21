<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "programminghub";

$conn = mysqli_connect($hostname, $username, $password, $db);

if(!$conn){
    die("Error " . mysqli_connect_error());
}

?>