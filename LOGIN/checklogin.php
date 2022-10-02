<?php
include "settings.php";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sqlQuery = "select * from mydb where username='$username' and password='$password'";
	$result = mysqli_query($variable, $sqlQuery);
	$numRows = mysqli_num_rows($result);
if ($numRows == 0){
	echo "Sorry your username and password is not available";
} 
else {
	echo "Welcome $username !";
}
?>