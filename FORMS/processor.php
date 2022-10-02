<?php

$usernames = ["Student", "Casama", "Guest"];
$passwords = ["plv123", "201107", "Guest"];

for ($i = 0; $i < 3; $i++){
if ($_POST["username"] === $usernames[$i] and $_POST["password"] === $passwords[$i]){
        $username = $usernames[$i];
        $password = $passwords[$i];
break;
	} 
else{
    $username = "";
    $password = "";
	}
}

if ($_POST["username"] === $username and $_POST["password"] === $password and $_POST["username"] !== "" and $_POST["password"] !== "") {
		echo "<strong> You have logged in </strong><p>Welcome $username </p>";
} else 
{
		echo "<strong> Sorry you have entered wrong information while logging in </strong>";
}
?>