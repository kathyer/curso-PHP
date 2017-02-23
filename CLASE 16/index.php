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
<title>Arrays</title>
</head>
<body>
	
	<?php
		$ingredientes =array("huevos", "patatas", "bacalao");
		$impares = array(1, 3, 5, 7);

		/* Otra forma */
		$pares = [2, 4, 6, 8];
		
		/* Imprimir el contenido de los arrays */
		echo"<pre>";
		print_r($pares);
		echo"</pre>";

		echo $impares[2];

		$bocadillo =array("Jamón serrano", "Queso fundido", "Pan de chapata");

		echo "<h3>Ingredientes: </h3></br>";
		for($i = 0; $i < count($bocadillo); $i++)
		{
			echo "<p>" . $bocadillo[$i] . "</p>";
		}

		/* Añadir un elemento al bocadillo */

		$bocadillo[3] = "Tortilla";
		$bocadillo[] = "ketchup";

		for($i = 0; $i < count($bocadillo); $i++)
		{
			echo "<p>" . $bocadillo[$i] . "</p>";
		}

		$bocadillo[1] = "Queso Cheddar";

				for($i = 0; $i < count($bocadillo); $i++)
		{
			echo "<p>" . $bocadillo[$i] . "</p>";
		}

		unset($bocadillo[3]);
		echo"<pre>";
		print_r($bocadillo);
		echo"</pre>";

		$numerosPequenos = [1, 2, 3, 4];
		$numerosGrandes = [2000, 3000, 5000, 8000];

		$todosLosNumeros = [$numerosPequenos, $numerosGrandes];

		echo $todosLosNumeros[0][2]; /* Esto mostraría un 3*/
		echo $todosLosNumeros[1][3]; /* Esto mostraría un 8000*/

		echo"<pre>";
		print_r($todosLosNumeros);
		echo"</pre>";

		/* Ejercicio: Mostrar todos los números primos menores que 100 */

		/* Declaración de variables */
		echo "<h3>Numeros primos menores que 100: </h3>";
		for ($i = 2; $i < 100; $i++)
		{
			$esPrimo = true;
			$divisor = 2;
			while (($divisor <= ($i/2)) && ($esPrimo == true))
			{
				if (($i%$divisor) == 0)
				{
					$esPrimo = false;
				}
				$divisor++;
			}
			if ($esPrimo == true)
			{
				echo $i . ", ";
			}
			$esPrimo = true;
		}

		/* Otras formas de realizarlo */
		echo "<h3>Numeros primos menores que 100: </h3>";
		for ($numero = 2; $numero <= 100; $numero++)
		{
			$esPrimo = true;
			for ($i = 2; $i <= ($numero/2) && $esPrimo == true; $i++)
			{
				if (($numero % $i) == 0)
				{
					$esPrimo = false;
				}
			}
			if ($esPrimo)
			{
				echo $numero . ", ";
			}
		}

		/* Arrays asociativos */
		$persona = 
		[
		"nombre" => "Paco",
		"apellidos" => "Gómez Pacheco",
		"edad" => 55,
		"sexo" => "V"
		];

		echo"<pre>";
		print_r($persona);
		echo"</pre>";

		$gente =
		[
			["nombre" => "Paco", "apellidos" => "Gómez Pacheco", "edad" => 55, "sexo" => "V"],
			["nombre" => "Marina", "apellidos" => "Sánchez Cortés", "edad" => 23, "sexo" => "M"]
		];

		echo"<pre>";
		print_r($gente);
		echo"</pre>";

		echo $gente[1]["edad"]; /* Esto mostraría la edad de marina*/

		echo "<br/>";

		$alumnos = 
		[
			"chicos" =>
			[
				["nombre" => "Paco", "apellidos" => "Pobre Sinapellidos", "edad" => 21, "sexo" => "V"]
			],
			"chicas" =>
			[
				["nombre" => "Marina", "apellidos" => "Sánchez Gordián", "edad" => 23, "sexo" => "M"]
			]
		];

		echo $alumnos["chicos"][0]["edad"]; /* Esto mostraría la edad de Paco*/

		/* Contar elementos de un array */

		$ropa = ["Pantalón", "Camisa", "Zapatos"];
		echo "<p>" . count($ropa) . "</p>";

		/* Saber si un elemento está o no en el array */

		if (in_array("Pantalón", $ropa))
		{
			echo "<p>Hay un pantalón</p>";
		}
		else
		{
			echo "<p>Hace falta mas ropa</p>";	
		}

		/* Crear otro array que contenga los números sin repetir */

		$numeros = [11, 3, 14, 15, 11, 9, 2, 3, 16 ,14, 19, 7, 6, 1, 9, 3, 18, 2];
		$numerosNoRepetidos = [];

		for ($i = 0; $i < count($numeros); $i++)
		{
			/* Buscar si está repetido el número */
			$repetido = false;
			$nVeces = 0;
			for($j = ($i + 1); $j < count($numeros) && !$repetido; $j++)
			{
				if ($numeros[$i] == $numeros[$j])
				{
					$repetido = true;
				}
			}
			if (!$repetido)
			{
				$numerosNoRepetidos[] = $numeros[$i];
			}
		}

		/* Otra forma de realizarlo */

		/*for ($i = 0; $i < count($numeros); $i++)
		{
			if (!in_array($numeros[$i], $numerosNoRepetidos))
				$numerosNoRepetidos[] = $numeros[$i];
		}*/

		echo "<h3>Array original:</h3><pre>";
		print_r($numeros);
		echo "</pre><h3>Array nuevo:</h3><pre>";
		print_r($numerosNoRepetidos);
		echo "</pre>";

	?>


	

</body>
</html>
