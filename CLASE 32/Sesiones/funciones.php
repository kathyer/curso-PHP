<?php

	function hacerListado($consulta)
	{
		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "ejerciciosesionesphp"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);

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
		$baseDeDatos = "ejerciciosesionesphp"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		mysqli_close($enlace); /* Cerrar la conexión */

		return $resultado;
	}

	function validarNuevoUsuario($datos)
	{
		if(empty($datos["nombre"]))
		{
			return "Introduzca el nombre";
		}
		if(empty($datos["email"]))
		{
			return "Introduzca su email";
		}
		if(empty($datos["password"]))
		{
			return "Introduzca una contraseña";
		}
		if(empty($datos["passwordRepetida"]))
		{
			return "Repita la contraseña";
		}
		if($datos["password"] != $datos["passwordRepetida"])
		{
			return "Las contraseñas no coinciden";
		}
		else
		{
			return "OK";
		}
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

	function insertarNuevoUsuario($datos)
	{
		unset($datos["passwordRepetida"]);
		$datos["password"] = sha1($datos["password"]);
		$consulta = crearConsultaInsertar($datos, "usuarios");
		return ejecutarConsulta($consulta);
	}

	function obtenerUsuarios()
	{
		$consulta = "SELECT * FROM usuarios;";
		$resultado = hacerListado($consulta);
		return $resultado;
	}

	function borrarUsuario($id)
	{	
		/*	Tabla, nombre del campo id, id a borrar*/
		$consulta = crearConsultaBorrar("alumnos", "id_alumno", $id);
		return ejecutarConsulta($consulta);
	}

	function obtenerUsuarioPorEmail($email)
	{
		$consulta = "SELECT * FROM usuarios WHERE email = '$email';";
		$resultado = hacerListado($consulta);
		if ($resultado)
		{
			return $resultado[0];
		}
		else
		{
			return false;
		}
	}

	function obtenerIdPorEmail($email)
	{
		$consulta = "SELECT id FROM usuarios WHERE email = '$email';";
		$resultado = hacerListado($consulta);
		if ($resultado)
			return $resultado[0]["id"];
		else
			return false;
	}

	function obtenerPasswordPorEmail($email)
	{
		$consulta = "SELECT password FROM usuarios WHERE email = '$email';";
		$resultado = hacerListado($consulta);
		return $resultado[0]["password"];
	}

	function logearUsuario($datosUsuario)
	{
		$resultado = obtenerUsuarioPorEmail($datosUsuario["email"]);
		if ($resultado == false)
		{
			return "No se encuentra el usuario seleccionado";
		}
		else
		{
			if (sha1($datosUsuario["password"]) == obtenerPasswordPorEmail($datosUsuario["email"]))
				return "OK";
			else
				return "La contraseña no es correcta";
		}
	}

?>