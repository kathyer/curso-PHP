<!-- Incluímos el archivo de cabecera -->
<?php get_header(); ?>

<!-- Título de la categoría -->
<h2><?php single_cat_title(); ?></h2>

<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>
<section>
    <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <header>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
                <?php the_category(); ?>
            </header>
            <?php the_excerpt(); ?>
            <footer>
                <address>Por <?php the_author_posts_link() ?></address>
            </footer>
        </article>
    <?php endwhile; ?>
    <div class="pagination">
        <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
        <span class="in-right"><?php previous_posts_link('Entradas recientes »'); ?></span>
    </div>
</section>
<?php else : ?>
    <p><?php _e('No hay entradas.'); ?></p>
<?php endif; ?>

<!-- Incluímos la barra lateral -->
<?php get_sidebar(); ?>
<!-- Incluímos el pie de página -->
<?php get_footer(); ?>