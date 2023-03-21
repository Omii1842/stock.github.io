<?php

$localhost = "localhost:4306";
$username = "root";
$password = "12345";
$dbname = "stock";

$conn = new mysqli($localhost, $username, $password, $dbname);

if (!$conn) {
    die('Connection Failed' . mysqli_connect_error());
}
