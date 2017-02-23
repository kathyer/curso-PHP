<!DOCTYPE html>
<html lang="es">
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="Description" content="Ejercicio de repaso de formularios"/><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
</style>
<title>Ejercicio tabla personas</title>
</head>
<body>
	
	<?php

	$personas =
	[
		["nombre" => "Manuel", "apellidos" => "Jiménez", "ciudad" => "Badajoz", "edad" => 23],
		["nombre" => "Harry", "apellidos" => "Potter", "ciudad" => "Londres", "edad" => 22],
		["nombre" => "Ronald", "apellidos" => "Weasley", "ciudad" => "Londres", "edad" => 22],
		["nombre" => "Hermione", "apellidos" => "Granger", "ciudad" => "Londres", "edad" => 22],
		["nombre" => "Parvati", "apellidos" => "Patil", "ciudad" => "York", "edad" => 24],
		["nombre" => "Lavender", "apellidos" => "Brown", "ciudad" => "Liverpool", "edad" => 21],
		["nombre" => "Draco", "apellidos" => "Malfoy", "ciudad" => "Sheffield", "edad" => 22],
		["nombre" => "Rubeus", "apellidos" => "Hagrid", "ciudad" => "York", "edad" => 40],
		["nombre" => "Albus", "apellidos" => "Dumbledore", "ciudad" => "Godric", "edad" => 154],
		["nombre" => "Minerva", "apellidos" => "McGonagall", "ciudad" => "Godric", "edad" => 78],
	];

	function dibujarCabecera()
	{
		echo "<thead><tr><th>Nombre</th><th>Apellidos</th><th>Ciudad</th><th>Edad</th><th>Acciones</th></tr></thead>";
	}

	function dibujarCelda($texto)
	{
		echo "<td>" . $texto . "</td>";
	}

	function dibujarBotones()
	{
		echo "<td>
		<button type=\"button\" class=\"btn-xs btn-info\"><span class=\"glyphicon glyphicon glyphicon-eye-open\"></span></button>
		<button type=\"button\" class=\"btn-xs btn-success\"><span class=\"glyphicon glyphicon glyphicon-pencil\"></span></button>
		<button type=\"button\" class=\"btn-xs btn-danger\"><span class=\"glyphicon glyphicon-remove\"></span></button>
		</td>";
	}

	function dibujarFila($nombre, $apellido, $ciudad, $edad)
	{
		echo "<tr>"; // Inicio de fila
		dibujarCelda($nombre);
		dibujarCelda($apellido);
		dibujarCelda($ciudad);
		dibujarCelda($edad);
		dibujarBotones();
		echo "</tr>\n"; // Fin de fila
	}

	function dibujarTabla($personas)
	{
		echo "<table class=\"table table-striped table-bordered\"><tbody>";
		dibujarCabecera();
		foreach ($personas as $persona)
		{
			dibujarFila($persona["nombre"], $persona["apellidos"], $persona["ciudad"], $persona["edad"]);
		}
		echo "</tbody></table>";
	}

	dibujarTabla($personas);

	?>


	

</body>
</html>
