<?php
include "settings.php";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$firstName = $_POST["firstname"];
	$lastName = $_POST["lastname"];
	$sqlQuery = "insert into mydb (username, password, firstName, lastName) values ('$username', '$password', '$firstName', '$lastName')";
	$result = mysqli_query($variable, $sqlQuery);
	header("location:index.php");
?>
