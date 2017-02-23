<?php
	include_once('conexion.php');

	function obtenerTodasLasViviendas()
	{
		$consulta = "SELECT * FROM viviendas";
		$viviendas = hacerListado($consulta);
		return $viviendas;
	}

	function obtenerViviendas($numero)
	{
		return hacerListado("SELECT * FROM viviendas LIMIT $numero");
	}
	
	function obtenerViviendaPorId($id)
	{
		return hacerListado("SELECT * FROM viviendas WHERE id='$id'")[0];
	}

	function obtenerViviendasAlquiler(){
		$consulta = "SELECT * FROM viviendas JOIN alquileres ON (viviendas.id=alquileres.id_viviendas)";
		$viviendas = hacerListado($consulta);
		return $viviendas;

	}

	function obtenerViviendasVenta()
	{
		$consulta = "SELECT * FROM viviendas JOIN ventas ON (viviendas.id=ventas.id_viviendas) LEFT JOIN promociones ON (viviendas.id=promociones.id_vivienda) ORDER BY viviendas.id;";
		$viviendas = hacerListado($consulta);
		return $viviendas;
	}

	function obtenerPromociones() {
		$consulta = "SELECT * FROM viviendas JOIN promociones ON (viviendas.id=promociones.id_viviendas)";
		$viviendas = hacerListado($consulta);
		return $viviendas;
	}

	function obtenerPromocionesVentas() {
		$consulta = "SELECT * FROM viviendas JOIN ventas ON (viviendas.id=ventas.id_viviendas) JOIN promociones ON (viviendas.id=promociones.id_vivienda) WHERE promociones.precio_v_promocion != 0;";
		$viviendas = hacerListado($consulta);
		return $viviendas;
	}

	function obtenerPromocionesAlquiler() {
		$consulta = "SELECT * FROM viviendas JOIN alquileres ON (viviendas.id=alquileres.id_viviendas) JOIN promociones ON (viviendas.id=promociones.id_vivienda) WHERE promociones.precio_a_promocion != 0;";
		$viviendas = hacerListado($consulta);
		return $viviendas;
	}

?>