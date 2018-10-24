<?php

	$host    = "localhost";
$username   = "root";
$password   = "";
$dbname     = "staff"; 
$dsn        = "mysql:host=$host;dbname=staff"; 

$conn = mysqli_connect("localhost","root", "", "staff");

function DatabaseConnect() {
	return mysqli_connect("localhost","root", "", "staff");
}

?>