<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$con = new mysqli($servername, $username, $password, $dbname);


if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}
?>