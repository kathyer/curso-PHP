<?php
/**
* Template Name: Plantilla de Contaco
*/
?>

<!-- Incluímos el archivo de cabecera -->
<?php get_header(); ?>

<!-- Contenido de la página de inicio -->
<?php if ( have_posts()) : the_post(); ?>
	<section>
		<h1><?php the_title();?></h1>
		<?php the_content(); ?>

		<form method="post" action="">
			<label for="name">Nombre</label><br>
			<input type="text" id="name" placeholder="Escribe aquí tu nombre y apellidos"></br>
			<label for="subject">Asunto</label><br>
			<input type="text" id="subject" placeholder="Motivo de tu consulta"></br>
			<label for="message">Mensaje</label><br>
			<textarea id="message"></textarea></br>
			<button type="submit">Envíar datos</button></br>
		</form>
	</section>
<?php endif; ?>

<!-- Incluímos la barra lateral -->
<?php get_sidebar(); ?>

<!-- Incluímos el pié de página -->
<?php get_footer(); ?>