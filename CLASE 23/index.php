<!DOCTYPE html>
<html lang="es">
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="Description" content="Ejercicio de repaso de formularios"/><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
</style>
<title>Ejercicios con cadenas</title>
</head>
<body>
	
	<?php

	function eliminarParte($cadena, $valor)
	{
		$posicionInicio = strpos($cadena, $valor);
		$resultado = substr($cadena, 0, $posicionInicio);
		$resultado .= substr($cadena, $posicionInicio + strlen($valor));
		return $resultado;
	}

	$valor ="OTRA COSA";
	$cadena1 = "Esto es $valor una cadena"; // En este caso sustituye el valor de la variable
	$cadena2 = 'Esto es $valor una cadena'; // Esto lo toma literal

	echo "<p>" . $cadena1 . "</p>";
	echo "<p>" . $cadena2 . "</p>";

	/* Pintarel primer carácter o los x primeros */
	echo "<p>" . $cadena1[0] . "</p>";

	/* Longitud de la cadena (caracteres que se pintan) */
	echo "<p>Longitud de la cadena: " . strlen($cadena1) . "</p>";

	/* Subcadena: Fragmento o porción de una cadena */
	/* El segundo parámetro indica desde donde empieza y el tercero indica la longitud. Es opcional, si no se pone nada es la cadena completa */
	echo "<p>Subcadena: " . substr($cadena1, 5, 6) . "</p>";

	/* Posición de un caracter dentro de una cadena. Si no está, devuelve FALSE */
	echo "<p>Posición: " . strpos($cadena1, "una") . "</p>";

	/* Ejercicio: Eliminar una parte de una cadena */
	$ejemplo = "Prueba de ejercicio de borrado";

	echo eliminarParte($ejemplo, "ejercicio");

	$ejemplo = "Prueba de ejercicio de borrado";
	
	echo "<p>Reemplazar: " . str_replace("ejercicio", "jajaaj", $ejemplo) . "</p>";

	$ejemplo = "Prueba de ejercicio de borrado";
	
	echo "<p>Reemplazar: " . str_replace("ejercicio", "", $ejemplo) . "</p>";

	/* Rellena con un caracter o varios la cadena pasada, con tantos espacios como número se le pase. Si no se pone nada, son espacios */

	$ejemplo = "Prueba de ejercicio para padding";

	echo "<p>Padding: " . str_pad($ejemplo, 50, ".", STR_PAD_BOTH) . "longitud: " . strlen($ejemplo) . "</p>";

	/*
	STR_PAD_LEFT
	STR_PAD_BOTH
	*/

	/* Ejercicio: Formatear multiplicación. Pasar dos números por parámetro y dibuje una multiplicación */

	function formatearMultiplicacion($valor1, $valor2)
	{
		$resultado = $valor1 * $valor2;
		$caracteres = strlen($resultado);
		echo "<pre>" . str_pad($valor1, $caracteres, " ", STR_PAD_LEFT) . "<br/>";
		echo "<ins>" . str_pad($valor2, $caracteres, " ", STR_PAD_LEFT) . "</ins><br/>";
		echo str_pad($resultado, $caracteres, " ", STR_PAD_LEFT) . "</pre>";
	}

	formatearMultiplicacion(12, 20);

	$cadena = "Cadena de PRuEBA";

	/* Conviertea mínúsculas */
	echo "<p>" . strtolower($cadena) . "</p>";

	/* Convertir a mayúsculas */
	echo "<p>" . strtoupper($cadena) . "</p>";

	function pascalCase($cadena)
	{
		$cadena = strtolower($cadena);
		$cadena[0] = strtoupper($cadena[0]);

		for ($i = 1; $i < strlen($cadena); $i++)
		{
			if ($cadena[$i] == " ")
			{
				$cadena[$i+1] = strtoupper($cadena[$i+1]);
			}
		}

		return $cadena;
	}

	function pascalCase2($cadena)
	{
		$cadena = strtolower($cadena);
		$cadena = explode(" ", $cadena);
		foreach ($cadena as $palabra)
		{
			echo strtoupper($palabra[0]);
			echo substr($palabra, 1) . " ";
		}
	}

	//$cadenaDeEjemplo =""
	echo "<p>" . pascalCase("cadena de prueba") . "</p>";
	echo "<p>" . pascalCase2("cadena de prueba") . "</p>";

	echo "<p>" . ucwords("cadena de prueba") . "</p>";

	/* Borrar espacios al principio y al final */

	$cadena = "  Probando      la   cadena         2          ";
	echo "<pre>";
	echo $cadena;
	echo "<br/></pre>";

	echo "<pre>";
	echo trim($cadena);
	echo "<br/></pre>";

	$numero = 1358.9623476;

	echo number_format($numero, 2, ",", ".");

	$otroemail = "sergio@otroemail.com";

	echo "<p>" . strstr($otroemail, "@", true) . "</p>";

	/* Cambia el caracter correspondiente por el de la misma posición del tercer parámetro */
	$tildes = "AEIOU";
	echo "<p>" . strtr($tildes, "AIU", "aiu") . "</p>";

	$texto = "hola\notrohola\nmashola";
	echo "<p>" . $texto . "</p>";
	echo "<p>" . nl2br($texto) . "</p>";

	?>


	

</body>
</html>
