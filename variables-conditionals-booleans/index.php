<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	$name = "Atomic Habits";
	$read = false;
	if ($read) {
		$message = "You have already read $name";
	} else {

		$message = "You have not read $name";
	}
	?>

	<h1>
		<?php echo $message; ?> 
		<?= $name ?> <!--shorthand for displaying php tag -->
	</h1>

</body>

</html>