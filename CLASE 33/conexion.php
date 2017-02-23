<?php

	function hacerListado($consulta)
	{
		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "biblioteca"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		//mysqli_set_charset($enlace, "utf8");
		/*
		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);
		*/

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		$listado = []; /* Creamos un array vacío, que será lo que nos devuelva al final de la función */

		if ($resultado)
		{
			while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
			{
				$listado[] = $fila;
			}
		}

		mysqli_free_result($resultado); /* Libera la memoria ocupada por la consulta */
		mysqli_close($enlace); /* Cerrar la conexión */

		return $listado;
	}

	function ejecutarConsulta($consulta)
	{
		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "biblioteca"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		mysqli_set_charset($enlace, "utf8");

		/*
		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);
		*/

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		mysqli_close($enlace); /* Cerrar la conexión */

		return $resultado;
	}

	function crearConsultaInsertar($datos, $tabla)
	{
		$indices = array_keys($datos);
		$valores = array_values($datos);

		$consulta = "INSERT INTO $tabla (" . implode(", ", $indices) . ") VALUES ('" . implode("', '", $valores) . "');";
		return $consulta;
	}

	function crearConsultaActualizar($datos, $tabla, $nombreid, $id)
	{
		$consulta = "UPDATE $tabla SET ";
		$parametros = [];
		foreach ($datos as $indice => $valor)
		{
			$parametros[] = "$indice = '$valor'";
		}

		return $consulta . implode(", ", $parametros) . " WHERE $nombreid='" . $id . "';";
	}

	function crearConsultaBorrar($tabla, $nombreid, $id)
	{
		return "DELETE FROM $tabla WHERE $nombreid=$id;";
	}

	function verArray($array)
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

?>