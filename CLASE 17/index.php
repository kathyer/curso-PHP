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

	$oracion = ["esto", "es", "una", "frase"];

	foreach ($oracion as $palabra)
	{
		echo $palabra . "<br/>";
	}

	$grupo =
	[
		"cantante" => "Julia",
		"guitarra" => "Jimmy Hendrix",
		"bateria" => "Bonifacio",
		"teclista" => "Indalecio",
		"bajo" => "Lupicinio"
	];

		foreach ($grupo as $componente => $integrante)
	{
		echo "el " . $componente . " es " . $integrante . "<br/>";
	}

	/* Ejemplo con array multidimensional */

	$array_multi =
	[
		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9]
	];

	echo "<h3>Ejercicio de arrays</h3>";
	foreach ($array_multi as $objeto)
	{
		echo "[ ";
		foreach ($objeto as $numero)
		{
			echo $numero . ", ";
		}
		echo " ]";
	}

	/* Ejercicio de números primos utilizando foreach */
	echo "<h3>Numeros primos menores que 100: </h3>";
	$primos = [];
	for ($i = 2; $i < 100; $i++)
	{
		$esPrimo = true;
		foreach ($primos as $nPrimo)
		{
			if (($i % $nPrimo) == 0)
			{
				$esPrimo = false;
			}
		}
		if ($esPrimo == true)
		{
			$primos[] = $i;
			echo $i . ", ";
		}
		$esPrimo = true;
	}

	$personas =
	[
		[
			["nombre" => "Anakin", "apellidos" => "Skywalker", "edad" => 19],
			["nombre" => "Han", "apellidos" => "Solo", "edad" => 19],
			["nombre" => "Mace", "apellidos" => "Windu", "edad" => 18]
		],
		[
			["nombre" => "Lavender", "apellidos" => "Brown", "edad" => 21],
			["nombre" => "Harry", "apellidos" => "Potter", "edad" => 21],
			["nombre" => "Hermione", "apellidos" => "Granger", "edad" => 21]
		],
		[
			["nombre" => "Varian", "apellidos" => "Wrymm", "edad" => 23],
			["nombre" => "Sylvanas", "apellidos" => "Brisaveloz", "edad" => 23],
			["nombre" => "Tirion", "apellidos" => "Vadin", "edad" => 25]
		]
	];

	$curso = 2;

	echo "<h3>Alumnos de " . $curso . "º curso:</h3>";
	foreach ($personas[$curso] as $alumno)
	{
		echo "<p>" . $alumno["nombre"] . " " .  $alumno["apellidos"] . " tiene " . $alumno["edad"] . " años.</p>";
	}

	$frutas  = [1 => "manzana", 2 => "tomate", 3 => "naranja"];
	$verduras = [1 => "apio", 4 => "tomate", 5=> "lechuga"];

	/* Unión */

	$union = $frutas + $verduras;

	echo "<pre>";
	print_r($union);
	echo "</pre>";

	$array1 = [1 => "uno", 2 => "dos", "3" => "tres"];
	$array2 = ["1" => "uno", 3 => "tres", "2" => "dos"];

	if ($array1 == $array2)
	{
		echo "<p>Los arrays son iguales</p>"; 
	}
	else
	{
		echo "<p>Los arrays son distintos</p>";
	}
	/* Resultado: Los arrays son iguales */

		if ($array1 === $array2)
	{
		echo "<p>Los arrays son iguales</p>"; 
	}
	else
	{
		echo "<p>Los arrays son distintos</p>";
	}
	/* Resultado: Los arrays no son iguales. Al usar 3 iguales compara tanto el orden del contenido como el tipo */

	/* Operaciones de Arrays */
	$diff = array_diff($frutas, $verduras);

	/* En una resta (diff) se guardan los elementos de frutas que no están en verduras. No tiene en cuenta el índice, solo el valor.*/

	echo "<br><pre>";
	print_r($diff);
	echo "</pre>";

	/* En una intersección (diff) se guardan los elementos de frutas estén en verduras. No tiene en cuenta el índice, solo el valor.*/
	$intersec = array_intersect($frutas, $verduras);

	echo "<br><pre>";
	print_r($intersec);
	echo "</pre>";

	/* Rellenado de arrays */
	/*
		Primer parámetro: Índice inicial
		Segundo parámetro: Número de veces
		Tercer parámetro: Valor que se le asigna a cada una de las celdas.
		En este caso tendriamso un array de 10 casillas con el valor 33 en cada una de ellas
	*/

	$fill = array_fill(0, 10, 33);

	echo "<br><pre>";
	print_r($fill);
	echo "</pre>";

	/* Invierte el array. Es decir, el contenido pasa a ser índice y el índice pasa a ser el contenido */
	$flip = array_flip($frutas);

	echo "<br><pre>";
	print_r($flip);
	echo "</pre>";

	/* Invierte el contenido del array. Es decir, primero pasa a ser el último y el último el primero */
	$reverse = array_reverse($frutas);

	echo "<br><pre>";
	print_r($reverse);
	echo "</pre>";

	?>


	

</body>
</html>
