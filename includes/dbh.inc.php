<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "bookie";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
	die("Connection failed: ".mysql_connect_error());
}