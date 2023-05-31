<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "HIMAPL";

$db = mysqli_connect($server, $user, $password, $dbname);

if(!$db){
    die("Connection error: ".mysqli_connect_error());
}
?>
