<?php
	include_once('conexion.php');

	function obtenerImagenesSlider()
	{
		$consulta = "SELECT * FROM slider WHERE activo ='1' ORDER by orden";
		return hacerListado($consulta);
	}
	
?>