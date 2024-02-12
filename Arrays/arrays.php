<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Recommended Books</h1>

	<?php
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
		<?php foreach ($books as $book) : ?>
			<li><?= $book ?></li>
		<?php endforeach; ?>
	</ul>

	<!-- how to interact with individual item in array in php  -->
	<p>
		<?= $books[0] ?>
	</p>

	<!-- Associative  arrays in php -->

	<?php

	$bookCollection = [
		[
			'name' => 'Atomic Habits',
			'author' => 'John Doe',
			'releaseYear' => 1995,
			'url' => 'https://www.amazon.com/Atomic-Habits',
		],
		[
			'name' => 'Deeniyat',
			'author' => 'Molana Mududi',
			'releaseYear' => 1995,
			'url' => 'https://www.amazon.com/Atomic-Habits',
		],
		[
			'name' => 'Psychology of Men',
			'author' => 'Molana Mududi',
			'releaseYear' => 1995,
			'url' => 'https://www.amazon.com/Atomic-Habits',
		]
	];
	?>

	<!--To display all keys of the first array in $bookCollection, you can access the keys using the array_keys() function and then loop through them to display them. -->
	<ul>
		<?php $firstBookKeys = array_keys($bookCollection[0]); ?>
		<?php foreach ($firstBookKeys as $key) : ?>
			<li><?= $key ?></li>
		<?php endforeach; ?>
	</ul>

	<!--If you want to display both the keys and their corresponding values for the first array in $bookCollection, you can use a foreach loop to iterate over the key-value pairs.--->
	<ul>
		<?php foreach($bookCollection[0] as $key => $value) : ?>
			<li><?= $key ?> : <?= $value?></li>
			<?php endforeach;?>
	</ul>

	<ul>
		<?php foreach ($bookCollection as $book) : ?>
			<a href="<?= $book["url"]; ?>">
				<li><?php echo $book['name'] ?> (<?php echo $book['releaseYear'] ?> ) </li>
			</a>
		<?php endforeach; ?>
	</ul>

	<!-- Associative  arrays in php - only accessing 3rd array from associative array by looping -->

	<ul>
		<?php $count = 0; ?>
		<?php foreach ($bookCollection as $book) : ?>
			<?php if ($count == 2) : ?>
				<li><?php echo $book['name'] ?></li>
			<?php endif; ?>
			<?php $count++; ?>
		<?php endforeach; ?>
	</ul>



	<!-- Get system info by calling builtin phpinfo() function in php  -->
	<?php phpinfo(); ?>
	<!-- $_Server is a superglobal variable and this ['HTTP_USER_AGENT'] to check current browser   -->
	<?php echo $_SERVER['HTTP_USER_AGENT']; ?>

	<!--  str_contains() is a function built into PHP which determines if a given string contains another string -->
	<?php
	# check if current browser is firefox 
	if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
	?>
		<h3>str_contains() returned true</h3>
		<p>You are using Firefox</p>
	<?php
	} else {
	?>
		<h3>str_contains() returned false</h3>
		<p>You are not using Firefox</p>
	<?php
	}
	?>

</body>

</html>