<?php
$server = "localhost";
$username  = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("error occured while connecting to database". mysqli_connect_error());
}

?>