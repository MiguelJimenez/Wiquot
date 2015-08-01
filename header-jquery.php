<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>
		<?php
			wp_title( '|', true, 'right' );
			bloginfo('name' );
		?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>

<!-- Aquí acaba el head de mi página -->
<body <?php body_class(); ?>>

