<?php

	include_once("funciones.php");

	function obtenerAlumnos()
	{
		$consulta = "SELECT * FROM alumnos;";
		$resultado = hacerListado($consulta);
		return $resultado;
	}

	/* Función que crea una consulta para la búsqueda de alumnos pero ordeandos por un criterio */
	function obtenerAlumnosOrdenados($criterio, $orden)
	{
		$consulta = "SELECT * FROM alumnos ORDER BY $criterio $orden";
		$resultado = hacerListado($consulta);
		return $resultado;
	}

	function guardarAlumno($datos)
	{
		$consulta = crearConsultaInsertar($datos, "alumnos");
		return ejecutarConsulta($consulta);	
	}

	function actualizarAlumno($datos, $id)
	{
		$consulta = crearConsultaActualizar($datos, "alumnos", "id_alumno", $id);
		return ejecutarConsulta($consulta);
	}

	function borrarAlumno($id)
	{	
		/*	Tabla, nombre del campo id, id a borrar*/
		$consulta = crearConsultaBorrar("alumnos", "id_alumno", $id);
		return ejecutarConsulta($consulta);
	}

	function obtenerAlumnoPorId($id)
	{
		$consulta = "SELECT * FROM alumnos WHERE id_alumno = '$id';";
		$resultado = hacerListado($consulta);
		if ($resultado)
			return $resultado[0];
		else
			return false;
	}
?>