<?php
/*
Plugin Name: Entradas a colores
Plugin URI: http://misplugins.com
Description: Cambmia el color de las entradas en función de su estado
Version: 1.0
Author: Jose Luis Martín Ávila
Autor URI: joseluis_f1@hotmail.com
License: GPLv2 o posterior
*/

function posts_status_color()
{
	/* Redefinimos las clases de los estados de publicación */

	?>
	<style>
	.status-draft { background: #FCE3F2 !important; }
	.status-pending { background: #FCFC85 !important; }
	.status-publish { /* Por defecto */ }
	.status-future { background: #C6EBF5 !important; }
	.status-private { background: #E7C7B4 !important; }
	</style>

	<?php
}

/* Es un gancho de tipo accion y llama a la segunda función y se llama cuando wordpress invoce admin_footer */
add_action("admin_footer", "posts_status_color");

?>