<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Paso de parámetros</title>
	<meta name="Description" content="Examen de curso PHP y HTML. Día 23 de Noviembre de 2016">
	<meta name="author" content="Jose Luis Martín Ávila">
	<!-- Cargamos Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="icon" type="img/png" href="img/icono.png">
</head>
<body>

<?php
	function calcular ($valor1, $valor2, $operacion)
	{
		/* Operación puede valer: sumar, restar, multiplicar, dividir, potencia, modulo */

		switch($operacion)
		{
			case "sumar":
			return $valor1 +  $valor2;
			break;

			case "restar":
			return $valor1 -  $valor2;
			break;

			case "multiplicar":
			return $valor1 * $valor2;
			break;

			case "dividir":
			return $valor1 /  $valor2;
			break;

			case "potencia":
			return $valor1 ** $valor2;
			break;

			case "modulo":
			return $valor1 % $valor2;
			break;

			default: return FALSE;
			break;
		}

	}

	echo "<p>Valor 1:  " . $_POST["valor1"] . "</p>";
	echo "<p>Valor 2:  " . $_POST["valor2"] . "</p>";
	echo "<p>Operaión :  " . $_POST["operacion"] . "</p>";
	echo "<p>Resultado  " . calcular ($_POST["valor1"], $_POST["valor2"], $_POST["operacion"]) . "</p>";

	?>

		
</body>
</html>