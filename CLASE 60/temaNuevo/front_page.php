<!-- Incluímos el archivo de cabecera -->
<?php get_header(); ?>

<!-- Contenido de la página de inicio -->
	<?php if ( have_posts() ) : the_post(); ?>

		<section>
			<h1><?php the_title() ?></h1>
			<?php the_content(); ?>
		</section>
		
	<?php endif; ?>

<!-- Barra lateral -->
<?php get_sidebar(); ?>

<!-- Pié de página -->
<?php get_footer(); ?>