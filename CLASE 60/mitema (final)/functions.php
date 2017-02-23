<?php

/* Añade aquí en forma de array los menús que quieras incluir */

function mis_menus() {
	register_nav_menus(
		array(
			'navegation' => __( 'Menú de navegación' ),
		)
	);
}

add_action( 'init', 'mis_menus' );

/* Añade aquí las zonas de widgets que quieras añadir a la página */

function mis_widgets(){
	register_sidebar(
		array(
			'name'          => __( 'Sidebar' ),
			'id'            => 'sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}

add_action('init','mis_widgets');

/* Filtra los resúltados de la búsqueda para que solo recupere entradas, y no páginas. */
 
function buscar_solo_posts($query) {
	if($query->is_search) {
		$query->set('post_type','post');
	}
	return $query;
}

add_filter('pre_get_posts','buscar_solo_posts');
