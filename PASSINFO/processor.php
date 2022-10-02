<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Process </title>
	</head>
	<body>
		<section>
			<h1><strong> Age Verification </strong></h1>
		<content>
				<p><strong>
						Your Name: <?php echo $_POST["name"] ?>
						<br>
						<br>
						Your Age: <?php echo $_POST["age"] ?>
				</strong></p>
			<h4>
				<?php
					$name = "name";
					$age = "age";

				if ($_POST["age"] >= "18"){
					echo "<br> Welcome!";
				} 
				else {
					echo "<br> Your age does not meet the requirements to access this page.";
				}
				?>
			</h4>
		<section>
	</body>
</html>