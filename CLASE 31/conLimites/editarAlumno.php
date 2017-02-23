<?php
	include("funciones.php");

	$mensajeValidacion = "";

	// Comprobamos si hay datos enviados por POST.
	if ($_POST) {
		$validacion = validarAlumno($_POST);
		if ($validacion !== false)
		{
			// Creamos un mensaje de error informando de que la
			// validación ha fallado.
			$mensajeValidacion = "<p class='alert alert-danger'>" . $validacion . "</p>";

			$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
			$apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : "";
			$edad = isset($_POST["edad"]) ? $_POST["edad"] : "";
			$curso = isset($_POST["curso"]) ? $_POST["curso"] : "";
			$altura = isset($_POST["altura"]) ? $_POST["altura"] : "";
			$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "H";
		}
		else
		{
			$consulta = "UPDATE alumnos SET nombre='" . $_POST["nombre"] . "', apellidos='" . $_POST["apellidos"] . "', edad=" . $_POST["edad"] . ", curso='" . $_POST["curso"] . "', altura=" . $_POST["altura"] . ", sexo='" . $_POST["sexo"] . "' WHERE id_alumno=" . $_GET["id"] . ";";
			if (insertarElemento($consulta) == true) {
				echo "Usuario guardado correctamente";
			} else {
				echo "Ha ocurrido un fallo al guardar el usuario.";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar alumno</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">
	<h1>Editar Alumno</h1>
	
	<?php
	if (empty($_GET["id"]))
	{
		echo "No se ha seleccionado persona";
	}
	else
	{
		$consulta = "SELECT * FROM alumnos WHERE id_alumno = " . $_GET["id"] . ";";
		$resultado = hacerListado($consulta)[0];

		// Los valores iniciales de los datos los ponemos aquí. 
		$nombre = $resultado["nombre"];
		$apellidos = $resultado["apellidos"];
		$edad = $resultado["edad"];
		$curso = $resultado["curso"];
		$altura = $resultado["altura"];
		$sexo = $resultado["sexo"];

		include("formularioAlumnos.php");
	}
		
	?>

</div>
</body>
</html>