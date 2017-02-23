<?php

	include_once("alumno_modelo.php");

	if (!empty($_GET["id"]))
	{
		if (borrarAlumno($_GET["id"]))
		{
			header("Location: index.php");
		}
		else
		{
			echo "Error al borrar un usuario";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
</body>
</html>