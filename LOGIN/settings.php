<?php
	$host = "localhost:3306";
	$username = "root";
	$password = "";
	$db_name = "mydb";
	$variable = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect to db");
?>