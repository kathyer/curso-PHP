	<?php

	include("alumno_modelo.php");

	$mensaje = "";

	if (!empty($_GET["id"]))
	{
		$resultado = obtenerAlumnoPorId($_GET["id"]);
		if ($resultado == false)
		{
			$mensaje = "<p class='alert alert-danger'>No se ha podido encontrar al usuario</p>";
		}
	}
	else
	{
		$resultado = false;
		$mensaje = "<p class='alert alert-danger'>Introduzca unos valores correctos</p>";
	}

?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Tabla de base de datos</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="Description" content="Ejercicio de repaso de formularios"/><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<?php
	if ($resultado == false)
		echo $mensaje;
	else
	{
	?>
		<h3>Datos del alumno</h3>
		<table class="table table-striped table-bordered">
		<thead>
		</thead>
		<tbody>
			<tr>
				<th>Nombre</th>
				<td><?= $resultado["nombre"]?></td>
			</tr>
			<tr>
				<th>Apellidos</th>
				<td><?= $resultado["apellidos"]?></td>
			</tr>
			<tr>
				<th>Edad</th>
				<td><?= $resultado["edad"]?></td>
			</tr>
			<tr>
				<th>Curso</th>
				<td><?= $resultado["curso"]?></td>
			</tr>
			<tr>
				<th>Altura</th>
				<td><?= $resultado["altura"]?></td>
			</tr>
			<tr>
				<th>Sexo</th>
				<td><?= $resultado["sexo"]?></td>
			</tr>
		</tbody>
		</table>
	<?php
	}
	?>

</body>
</html>