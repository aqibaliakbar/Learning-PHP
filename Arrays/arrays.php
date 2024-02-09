<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Recommended Books</h1>

	<?= 
	$books = [
		"The Book",
		"The Book 2",
		"The Book 3"
	];
	?>

	<ul>
		<?php foreach ($books as $book) {
			echo "<li>$book</li>";
		}
		?>;
		<!-- shorthand for looping array in php -->
		<?php foreach ($books as $book) : ?>;
			<li><?= $book ?></li> 
			<?php endforeach; ?>
		
		
	</ul>
</body>
</html>