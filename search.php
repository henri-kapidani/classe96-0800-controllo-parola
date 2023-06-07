<?php

// $word = isset($_GET['word']) ? $_GET['word'] : '';

// $word = $_GET['word'] ?? '';
// $word = strtolower($word);

$word = isset($_GET['word']) ? strtolower($_GET['word']) : '';

$arr_words = ['gatto', 'pasta', 'php', 'boolean', 'ciao'];

$word_found = in_array($word, $arr_words);

// if (in_array($word, $arr_words)) {
// 	echo 'parola trovata';
// } else {
// 	echo 'parola NON trovata';
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controllo parola</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<div class="container">
		<h1>Controllo parola</h1>

		<h2>if con graffe</h2><?php
		if ($word_found) { ?>
			<h3>Parola trovata</h3><?php
		} else { ?>
			<h3>Parola NON trovata</h3><?php
		} ?>

		<h2>if senza graffe</h2>
		<?php
		if ($word_found) : ?>
			<h3>Parola trovata</h3><?php
		else : ?>
			<h3>Parola NON trovata</h3><?php
		endif; ?>

		<a href="/classe96-0800-controllo-parola" class="btn btn-primary">&lt Indietro</a>

	</div>
</body>

</html>