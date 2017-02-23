<?php
		$nombre = "Jose Luis";
		$edad = 26;
?>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="Description" content="Ejercicio de repaso de formularios"/><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
</style>
<title>Funciones</title>
</head>
<body>
	
	<?php

	/* Función sencilla */
	function saludar()
	{
		echo "Hola mundo";
	}

	saludar();

	function saludame($nombre)
	{
		echo "<p>Hola " . $nombre . "</p>";
	}

	saludame("Jose");

	function sumar($numero1, $numero2)
	{
		echo ($numero1 + $numero2);
	}

	/* Ejercicio */
	function sumarConTexto($numero1, $numero2)
	{
		echo "<p>La suma de " . $numero1 . " y " . $numero2 . " es: " . ($numero1 + $numero2) . "</p>";
	}

	sumar(3, 4);
	sumarConTexto(3, 4);

	function saludame2($nombre)
	{
		return "<p>Hola, $nombre </p>";
	}

	echo saludame2("Jose");

	function sumar2($numero1, $numero2)
	{
		return ($numero1 + $numero2);
	}

	echo (sumar2(3, 5) * sumar2(2, 8));

	/* Hacer una función que se llame cuadrado y devuelvea el número elevado al cuadrado */

	function cuadrado($n)
	{
		return $n * $n;
	}

	$numero = 145322;
	echo "<p>El cuadrado de " . $numero . " es: " . cuadrado($numero) . "</p>";

	/* Realizar una función que calcule el volumen de un cilindro */

	function volumenCilindro($radio, $altura)
	{
		return $altura * M_PI * $radio * $radio;
	}

	$altura = 50;
	$radio = 5;

	echo "<p>El volumen de un cilindro de altura " . $altura . " y de radio " . $radio . " es " . volumenCilindro($radio, $altura) . "</p>";

	/* Ejercicio: Realizar una función que se llame factorial y que calcule el factorial del número */

	function factorial($numero)
	{
		if ($numero == 0)
			return 1;
		else
		{
			$acumulador = 1;
			for ($numero; $numero > 1; $numero--)
			{
				 $acumulador *= $numero;
			}
		}
		return $acumulador;
	}

	$numero = 7;

	echo "<p>El factorial de ". $numero . " es " . factorial($numero) . "</p>";

	?>


	

</body>
</html>
