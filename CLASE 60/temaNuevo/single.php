<!-- Incluímos el archivo de cabecera -->
<?php get_header(); ?>

<!-- Contenido de la entrada -->
	<?php if ( have_posts() ) : the_post(); ?>

		<section>
			<h1><?php the_title() ?></h1>
			<time datetime="<?php the_time('Y-m-j');?>"><?php the_time('j F, Y');?></time>
			<?php the_category(); ?>
			<?php the_content(); ?>
			<?php the_tags("<ul><li>", "</li><li>", "</li></ul>"); ?>
			<address>Por <?php the_author_posts_link()?></address>

			<!-- Zona de comentarios -->
			<?php comments_template(); ?>
		</section>

	<?php else : ?>
		<?php _e("Esta entrada no existe=");?>
	<?php endif; ?>

<!-- Barra lateral -->
<?php get_sidebar(); ?>

<!-- Pié de página -->
<?php get_footer(); ?>