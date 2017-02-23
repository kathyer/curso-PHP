<!DOCTYPE HTML>
<html Lang="<?php bloginfo('languaje'); ?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo("name") ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<?php wp_head();?>
</head>
<body>
	<header>
		<h1 class="titulo"><?php bloginfo("name")?></h1>
	</header>
	<nav>
		<ul class="menuPrincipal">
			<?php
			/* Creamos una lista y dentro de ella colocamos el menú navegation que hicimos anteriormente */
				wp_nav_menu(array("theme_location" => "navegation"));
			?>
		</ul>
	</nav>