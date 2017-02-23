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

	/* array_keys: Sirve para extraer los índices de un array y guardarlos en otro */
	$asociativo =
	[
		"nombre" => "Luis",
		"apellido" => "García",
		"edad" => 27
	];

	$keys = array_keys($asociativo);

	echo "<br><pre>";
	print_r($keys);
	echo "</pre>";

	/* array_values: Sirve para extraer los valores de un array y guardarlos en otro */
	$values = array_values($asociativo);

	echo "<br><pre>";
	print_r($values);
	echo "</pre>";

	/* Concatenación: array_merge. Junta arrays en 1, pero cambia los índices */
	$array1 = [1 => "Hola", 3 => "Hello", 4 => "Alo"];
	$array2 = [0 => "Adiós", 2 => "Adeu", 3 => "Aufwiedersehen"];

	$merge = array_merge($array1, $array2);

	echo "<br><pre>";
	print_r($merge);
	echo "</pre>";

	/* Extraer el último elemento: pop*/
	$ultimo = array_pop($array1);
	echo $ultimo . "<br/>";

	echo "<br><pre>";
	print_r($array1);
	echo "</pre>";

	/* Inserta un último elemento: push */
	array_push($array1, "nuevo");
	echo $primero . "<br/>";

	echo "<br><pre>";
	print_r($array1);
	echo "</pre>";

	/* Extrae el primer elemento del array */
	$primero = array_shift($array1);
	echo $primero . "<br/>";

	echo "<br><pre>";
	print_r($array1);
	echo "</pre>";

	/* Añade un nuevo elemento en primera posición */
	array_unshift($array1, "otro");

	echo "<br><pre>";
	print_r($array1);
	echo "</pre>";

	/* Devuelve la posición en la que está el elemento a buscar */
	$busqueda = array_search("Hello", $array1);
	if ($busqueda == NULL)
		echo "<p>No se ha encontrado el elemento</p>";
	else
		echo "<p>El elemento se encuentra en la posición " . $busqueda . "</p>";

	/* Escoger una porción de elementos de un vector */

	$letras = ["a", "b", "c", "d", "e", "f"];

	$porcion = array_slice($letras, 0, 3);
	echo "<br><pre>";
	print_r($porcion);
	echo "</pre>";

	/* Eliminar elementos repetidos: array_unique */
	$numeros = [1, 2, 3, 4, 1, 2, 5, 3, 5, 5, 7, 1, 3, 4, 5];
	$unique = array_unique($numeros);
	echo "<br><pre>";
	print_r($unique);
	echo "</pre>";

	/* Mostrar cada elemento del array separados por el contenido el primer parámetro. Devuelve una cadena de texto. */
	echo implode(", ", $numeros);

	/* Separar una cadena mediante el primer parámetro y lo mete en un array */
	$cadena = "Hola me llamo Jose Luis";
	$resultado = explode(" ", $cadena);
	echo "<br><pre>";
	print_r($resultado);
	echo "</pre>";

	/* FUNCIONES PARA ORDENAR ARRAYS */

	$comida = 
	[
		2 => "Bacalao",
		1 => "Huevos",
		5 => "Leche",
		0 => "Pan",
		4 => "Fruta"
	];

	/* Ordenar por orden alfabético y se carga los índices */
	sort($comida);
	echo "<br><pre>";
	print_r($comida);
	echo "</pre>";

	/* Ordenar por orden alfabético inverso y se carga los índices */
	$comida = 
	[
		2 => "Bacalao",
		1 => "Huevos",
		5 => "Leche",
		0 => "Pan",
		4 => "Fruta"
	];

	rsort($comida);
	echo "<br><pre>";
	print_r($comida);
	echo "</pre>";

	/* Ordenar por orden alfabético y mantiene la correspondencia con los índices */

	$comida = 
	[
		2 => "Bacalao",
		1 => "Huevos",
		5 => "Leche",
		0 => "Pan",
		4 => "Fruta"
	];

	asort($comida);
	echo "<br><pre>";
	print_r($comida);
	echo "</pre>";

	/* Ordenar por orden alfabético inverso y mantiene la correspondencia con los índices */

	$comida = 
	[
		2 => "Bacalao",
		1 => "Huevos",
		5 => "Leche",
		0 => "Pan",
		4 => "Fruta"
	];

	arsort($comida);
	echo "<br><pre>";
	print_r($comida);
	echo "</pre>";

	/* Ordena alfabeticamente un array por indices */
	$comida = 
	[
		2 => "Bacalao",
		1 => "Huevos",
		5 => "Leche",
		0 => "Pan",
		4 => "Fruta"
	];

	ksort($comida);
	echo "<br><pre>";
	print_r($comida);
	echo "</pre>";

	/* Ordena alfabeticamente inverso un array por indices */
	$comida = 
	[
		2 => "Bacalao",
		1 => "Huevos",
		5 => "Leche",
		0 => "Pan",
		4 => "Fruta"
	];

	krsort($comida);
	echo "<br><pre>";
	print_r($comida);
	echo "</pre>";	



	?>


	

</body>
</html>
