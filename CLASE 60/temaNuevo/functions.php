<?php

/* Añade aquí en forma de array los menús que quieras incluir */

/*
Se puede poner el índice que queramos. navegation es el menú estándar
__ significa que se puede traducir
navegation es el slug.
*/

function mis_menus()
{
	register_nav_menus(
		array("navegation" => __( "Menú de prueba de tema" ),
			)
		);
}

/* Llamada a una acción de wordpress. El primero indica cuando se lanza una accion (al inicio) y la segunda que función genera. En estes caso hace que al inicio se agregue un nuevo menú */
add_action("init", "mis_menus");

/* Función que hemos llamado mis_widgets (se puede llamar como quieras)*/
function mis_widgets()
{
	/* A register_sideber se le pasan los parámetros de la zona */
	/* id es el slug por el cual se le va a conocer dentro de wordpress */
	/* before y after son los códigos que aparecerán antes y después*/
	register_sidebar(
		array(
			"name" => __("Sidebar"),
			"id" => "sidebar",
			"before_widget" => "<div class='widget'>",
			"after_widget" => "</div>",
			"before_title" => "<h3>",
			"after_title" => "</h3>",
		)
	);
}

add_action("init", "mis_widgets");

function buscar_solo_posts($query)
{
	// Comprobamos que si es de búsqueda, busque solo en las páginas de tipo post
	if ($query->is_search)
	{
		$query->set("post_type", "post");
	}
	return $query;
}

/* El filtro lleva dos parámetros, cuando se ejecuta y a que función llama. Se hace antes de pedir las entradas y se llama a la función buscar_solo_posts */
add_filter("pre_get_posts", "buscar_solo_posts");

?>