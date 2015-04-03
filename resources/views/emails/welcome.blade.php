<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<?php

		$name 		= Input::get('name');
		$email 		= Input::get('email');
		$phone 		= Input::get('phone');
		$message 	= Input::get('message');

	?>
	<body>
		<h2>This person wishes to contact you:</h2>
		<p>
		Name: <?php echo $name ?><br>
		E-mail: <?php echo $email ?><br>
		Phone Number: <?php echo $phone ?><br>
		Message: <?php echo $message ?><br>
		</p>
	</body>
</html>