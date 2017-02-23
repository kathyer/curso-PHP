<?php

	include_once("funciones.php");

	if (!empty($_GET["id"]))
	{
		$consulta = crearConsultaBorrar("alumnos", "id_alumno", $_GET["id"]);
		$resultado = insertarElemento($consulta);
	}
	if ($resultado == true)
	{
		header("Location: index.php");
	}
	else
	{
		echo "Error al borrar un usuario";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
</body>
</html>