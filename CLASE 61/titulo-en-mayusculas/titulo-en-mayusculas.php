<?php
/*
Plugin Name: Título en mayúsculas
Plugin URI: http://misplugins.com
Description: Hace que los títulos de las entradas aparezcan en mayúsculas
Version: 1.0
Author: Jose Luis Martín Ávila
Autor URI: joseluis_f1@hotmail.com
License: GPLv2 o posterior
*/

function tituloEnMayusculas($titulo)
{
	return strtoupper($titulo);
}
/* Gancho de tipo filtro, que recibe un dato y lo modifica */
/* Cuando se hace la función the_title llamando este filtro, pasa el resultado a tituloEnMayusculas */
add_filter("the_title", "tituloEnMayusculas");
?>