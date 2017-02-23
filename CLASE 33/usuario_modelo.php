<?php
	include_once("conexion.php");

	function obtenerTodosLosUsuarios()
	{
		$consulta = "SELECT id, nombre, email FROM usuarios;";
		return hacerListado($consulta);
	}

	function obtenerUsuarioPorId($id)
	{
		$consulta = "SELECT * FROM usuarios WHERE id='$id';";
		$resultado = hacerListado($consulta);
		if (count($resultado) <= 0)
			return false;
		else
			return $resultado[0];
	}

	function obtenerUsuarioPorEmail($email)
	{
		$consulta = "SELECT * FROM usuarios WHERE email='$email'";
		$resultado = hacerListado($consulta);
		if (count($resultado) <= 0)
			return false;
		else
			return $resultado[0];
	}

	function obtenerUsuarioPorEmalYContrasena($email, $contrasena)
	{
		$consulta = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena';";
		$resultado = hacerListado($consulta);
		if (count($resultado) <= 0)
			return false;
		else
		{
			return $resultado[0];
		}
	}

	function eliminarUsuarioPorId($id)
	{
		$consulta = "DELETE FROM usuarios WHERE id='$id';";
		$resultado = ejecutarConsulta($consulta);
		/* ACLARACIÓN: Es posible que no exista el id a borrar, pero el resulado de la consulta será verdadero. Se verá proximamente */
		return $resultado;
	}

	function guardarUsuario($datos)
	{
		$consulta = crearConsultaInsertar($datos, "usuarios");
		return ejecutarConsulta($consulta);
	}

	function cifrarContrasena($contrasena)
	{
		return sha1($contrasena);
	}

	function comprobarErroresUsuario($datos)
	{
		/* Si hay errores devuelve una cadena con el error y si no hay errores, devuelve falso */
		if (empty($datos["nombre"]))
		{
			return "Debe completar el nombre";
		}
		if (empty($datos["email"]))
		{
			return "Debe completar su correo electrónico";
		}
		if (empty($datos["contrasena"]))
		{
			return "Debe escribir una contraseña";
		}
		if (empty($datos["contrasena2"]))
		{
			return "Debe repetir la contraseña";
		}
		if ($datos["contrasena"] != $datos["contrasena2"])
		{
			return "Las contraseñas no coinciden";
		}
		if (obtenerUsuarioPorEmail($datos["email"]) != false)
		{
			return "Ese correo electrónico ya está registrado";
		}

		return false;
	}



?>