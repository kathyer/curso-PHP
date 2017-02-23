<!-- Incluímos el archivo de cabecera -->
<?php get_header(); ?><?php get_header(); ?>

<!-- Contenido de la entrada -->
<?php if ( have_posts() ) : the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
		<?php the_category(); ?>
		<?php the_content(); ?>
		<?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
		<address>Por <?php the_author_posts_link() ?></address>

		<!-- Comentarios -->
		<?php comments_template(); ?>
	</section>
<?php else : ?>
 	<p><?php _e('Esta entrada no existe.'); ?></p>
<?php endif; ?>

<!-- Incluímos la barra lateral -->
<?php get_sidebar(); ?>
<!-- Incluímos el pie de página -->
<?php get_footer(); ?>