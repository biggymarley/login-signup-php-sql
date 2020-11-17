<?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbName = "eshop";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if(!$conn)
{
    die("Connection faild :" . mysqli_connect_error());
}