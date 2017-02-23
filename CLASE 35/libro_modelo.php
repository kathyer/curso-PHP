<?php
	include_once('conexion.php');

	function obtenerTodosLosLibros()
	{
		$consulta = "SELECT id, titulo FROM libros";
		$libros = hacerListado($consulta);
		return $libros;
	}

	function obtenerLibrosPorPagina($pagina, $registrosPorPagina=5)
	{
		$offset = ($pagina - 1) * $registrosPorPagina;
		$consulta = "SELECT id, titulo FROM libros LIMIT $offset, $registrosPorPagina;";
		$libros = hacerListado($consulta);
		return $libros;
	}

	function obtenerLibroPorId($id)
	{
		$consulta = "SELECT * FROM libros WHERE id='$id'";
		$libros = hacerListado($consulta);
		if (count($libros) <= 0) {
			return false;
		} else {
			return $libros[0];
		}
	}

	function libroEstaPrestadoPorId($id)
	{
		$consulta = "SELECT usuario_id FROM libros WHERE id='$id';";
		$resultado = hacerListado($consulta);
		if (count($resultado) > 0)
		{
			if ($resultado[0]["usuario_id"] == NULL)
				return false;
			else
				return true;
		}
		return false;
	}

	function devolverLibro($id)
	{
		if (!libroEstaPrestadoPorId($id))
		{
			return false;
		}
		$consulta = "UPDATE libros SET usuario_id = NULL WHERE id='$id';";
		$resultado = ejecutarConsulta($consulta);
		if ($resultado == false)
			return false;
		return true;
	}

	function prestarLibro($idLibro, $idCliente)
	{
		if (existeLibro($idLibro))
		{
			$consulta = "UPDATE libros SET usuario_id = '$idCliente' WHERE id='$idLibro';";
			$resultado = ejecutarConsulta($consulta);
			if ($resultado == false)
				return false;
			return true;
		}
		else
			return false;
	}

	function existeLibro($idLibro)
	{
		$consulta = "SELECT id FROM libros WHERE id='$idLibro';";
		$resultado = hacerListado($consulta);
		if (count($resultado) <= 0)
			return false;
		return true;
	}

?>