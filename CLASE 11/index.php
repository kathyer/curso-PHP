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
table
{
	text-align: center;
}
</style>
<title>Mi primera página PHP</title>
</head>
<body>
	<p>Hola, me llamo <?=($nombre); ?> y tengo <?=($edad); ?> años</p>
	<p>Hola, tengo <?= $edad ; ?> años</p>
	<?php
	echo "Hola, tengo $edad años";
	echo 'Hola, tengo $edad años';
	?>
	<?php echo "Hola, tengo " . $edad . " años </br>" ;?>
	<?php
	$numero1 = 2;
	$numero2 = 5;
	echo "La suma de $numero1 y $numero2 es " . ($numero1 + $numero2) . "<br>";
	echo gettype($numero1);
	?>
	<h2>Primer ejercicio de hoy</h2>
	<?php 
		$varCad = "Cadena de Prueba";
		$varInt = 8;
		$varFloat = 23.54;
		$varBool = True;
		echo "<p>La variable varCad vale " . $varCad . " y es de tipo " . gettype($varCad) . "</p>" . PHP_EOL;
		echo "<p>La variable varInt vale " . $varInt . " y es de tipo " . gettype($varInt) . "</p>" . PHP_EOL;
		echo "<p>La variable varFloat vale " . $varFloat . " y es de tipo " . gettype($varFloat) . "</p>" . PHP_EOL;
		echo "<p>La variable varBool vale " . $varBool . " y es de tipo " . gettype($varBool) . "</p>" . PHP_EOL;
	?>

<?php
	$valor1 = 3;
	$valor2 = 7;
	echo $valor1 + $valor2 . "</br>"; /* Suma */
	echo $valor1 - $valor2 . "</br>"; /* Resta */
	echo $valor1 * $valor2 . "</br>"; /* Multiplicación */
	echo $valor1 / $valor2 . "</br>"; /* División */
	echo $valor2 % $valor1 . "</br>"; /* Módulo (Resto) */
	echo $valor1 ** $valor2 . "</br>"; /* Potencia */
?>

	<?php
	$n = 9; /* Número a multiplicar */
	echo "<center><table border=1>
	<tr>
		<td colspan=2 ><h2>Tabla del " . $n . "</h2></td>
	</tr>";
		for ($i = 1; $i <= 10; $i++) /* Bucle que repite una acción 10 veces */
		{
			echo "<tr>
			<td>" . $n . " x " . $i . "</td>
			<td>" . $n*$i . "</td>
			</tr>"; /* Primera columna y segunda columna */
		}
		echo "</table></center>" /* Cerramos la tabla y su centrado*/
	?>

	<?php
	$var1 = 4;
	$var2 = 7;

	if ($var1 < $var2)
	{
		echo "La variable 1 es mas pequeña que la variable 2";
	}
	?>

	<?php
	$var1 = 20;
	$var2 = 5;

	if (($var1 % $var2) == 0)
	{
		echo "<p>" . $var1 . " es múltiplo de " . $var2 . "</p>"; /* Un valor es múltiplo de otro si es divisible entre el (resto divison = 0) */
	}
	?>
	
</body>
</html>