<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
</head>

<body>
	<nav><?php echo anchor('page/view/about', 'About') ?>
		<?php echo anchor('page/view/services', 'Services') ?>
		<?php echo anchor('page/view/contact', 'Contact') ?>
		<?php echo anchor('page/signup', 'Sign-up') ?>
	</nav>
