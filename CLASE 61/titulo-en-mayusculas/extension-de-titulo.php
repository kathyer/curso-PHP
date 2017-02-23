<?php
/*
Plugin Name: Extension de título
Plugin URI: http://misplugins.com
Description: Añade un segundo título al título principal
Version: 1.0
Author: Jose Luis Martín Ávila
Autor URI: joseluis_f1@hotmail.com
License: GPLv2 o posterior
*/

function anadir_meta_boxes()
{
	/*
	Primer parámetro: id de la caja
	Segundo: label, el texto que sale visible en la parte de administración
	Tercero: función que se encarga de pintar lo que hay dentro de la caja
	*/
	add_meta_box("extension-titulo", "Extensión de título", "imprimir_extension_del_titulo");
}

function imprimir_extension_del_titulo($entrada)
{
	$entrada_id = $entrada->ID;
	/*
	Obtener metadatos del post
	Primer : la id de la entrada
	Segundo: el campo que queremos conseguir de la entrada
	Tercero: una variable que puede ser verdadera o falsa. Falsa devuelve todos los campos del la tabla y verdero solo 1
	*/
	$valor = get_post_meta($entrada_id, "mi-extension-titulo", true);
?>
	<label for="extension-titulo">Texto:</label>
	<input name="extension-titulo" id="extension-titulo" type="text" value="<?php echo esc_attr($valor)?>" />

<?php
}

function guardarExtensionTitulo($entrada_id)
{
	// Si se está guardando automáticamente, no hacemos nada.
	// Si se guarda automaticamente se crea una constante que vale 1
	if (defined( "DOING_AUTOSAVE") && DOING_AUTOSAVE )
	{
		return;
	}

	// Si creamos la entrada y no tenemos el campo del formulario, no hacemos nada
	if (!isset( $_REQUEST["extension-titulo"]))
	{
		return;
	}

	/*
	Obtenemos el valor del campo y lo impiamos por seguridad
	trim: quitar los espacios al principio y final de una cadena
	Limpia nuestro código para no tener cosas raras pra evitar ataques de inyeccion SQL (entre otros)
	*/
	$texto = trim(sanitize_text_field($_REQUEST["extension-titulo"]));

	/*
	Lo guardamos en un campo personalizado que llamaremos "mi-extension-titulo".
	Primero: id de la entrada
	Segundo: como se llama el campo
	Tercero: el contenido del campo
	*/
	update_post_meta($entrada_id, "mi-extension-titulo", $texto);
}

function cambiar_titulo($titulo, $id)
{
	$texto = get_post_meta($id, "mi-extension-titulo", true);

	if (!empty($texto))
	{
		$titulo = $titulo . " " . $texto;
	}

	return $titulo;
}

add_action("add_meta_boxes_post", "anadir_meta_boxes");
add_action("save_post", "guardarExtensionTitulo");

/*
Hay que indicarle que se le van a enviar dos parámetros
El tercer parámetro es la prioridad con la que se necesita el parámetro
El cuarto son los parámetros que se le envían.

En el caso de las llamadas, Wordpress está preparado para que el primer parámetro sea el título y el segundo el id. A partir del ID ya es posible extraer el resto de datos del post (o a lo que se esté llamando)
*/
add_filter("the_title", "cambiar_titulo", 10, 2);

?>