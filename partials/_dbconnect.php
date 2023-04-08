<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "gsdc";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("fsiled to connect". mysqli_connect_error());
}

?>