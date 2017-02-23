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

	/* Operador ternario */

	// $valor = ($x == 1) ? "uno" : "dos";

	/* Ejercicio calculadora */

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

	$operador1 = 20;
	$operador2 = 7;

	echo "<hr/>";
	echo "La suma de " . $operador1 . " y " . $operador2 . " es: ". calcular($operador1, $operador2, "sumar") . "<br/>";
	echo "La resta de " . $operador1 . " y " . $operador2 . " es: ". calcular($operador1, $operador2, "restar") . "<br/>";
	echo "La multiplicación de " . $operador1 . " y " . $operador2 . " es: ". calcular($operador1, $operador2, "multiplicar") . "<br/>";
	echo "La división de " . $operador1 . " y " . $operador2 . " es: ". calcular($operador1, $operador2, "dividir") . "<br/>";
	echo "La potencia de " . $operador1 . " elevado a " . $operador2 . " es: ". calcular($operador1, $operador2, "potencia") . "<br/>";
	echo "El módulo de " . $operador1 . " y " . $operador2 . " es: ". calcular($operador1, $operador2, "modulo") . "<br/>";
	echo "<hr/>";

	/* Parámetros por defecto */
	/* Se pueden añadir mas de un parámetro por defecto, pero estos solo pueden estar al final de la declaración. Por ejemplo
	function calcular2 ($valor1, $operacion = "sumar", $valor2) no sería válido */
	function calcular2 ($valor1, $valor2, $operacion = "sumar")
	{
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

	echo "<hr/>";
	echo "La operación por defecto " . $operador1 . " y " . $operador2 . " es: ". calcular2($operador1, $operador2) . "<br/>";
	echo "<hr/>";

	$x = 0;

	/* En php los parámetros son siempre por valor */
	function incrementar()
	{
		$x = $x + 1;
		return $x;
	}

	incrementar();
	incrementar();
	incrementar();
	incrementar();

	echo "<p>" . $x . "</p>";

	$a = 0;

	function incrementar_global()
	{
		global $a; /* Afectaría a una variable llamada $a, declarada fuera. Se trata de una variable global */

		$a = $a + 1;
	}

	incrementar_global();
	incrementar_global();
	incrementar_global();

	echo "<p>" . $a . "</p>";

	function incrementar_static()
	{
		static $a = 0;
		echo "<p>" . $a . "</p>";
		$a++;
	}

	incrementar_static();
	incrementar_static();
	incrementar_static();

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
	]

	?>


	

</body>
</html>
