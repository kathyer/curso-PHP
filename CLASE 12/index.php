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
	$var1 = 21;
	$var2 = 5;

	if (($var1 % $var2) == 0)
	{
		echo "<p>" . $var1 . " es múltiplo de " . $var2 . "</p>"; /* Un valor es múltiplo de otro si es divisible entre el (resto divison = 0) */
	}
	else
	{
		echo "<p>El número $var1 no es múltimplo de $var2<p>"; /* Si no es divisible, muestra este mensaje */
	}

	$edad = 70;

	if (($edad > 18) && ($edad < 65))
	{
		echo "<p>Una persona con " . $edad . " años puede trabajar</p>";
	}
	else
	{
		echo "<p>Una persona con " . $edad . " años no puede trabajar</p>";
	}

	$altura = 128;

	/* Operación OR */
	if (($edad < 12) || ($altura < 135))
	{
		echo "<p>Tienes que llevar silla</p>";
	}

	/* Ejercicio #################################################################################################*/

	if ((($var1 % $var2) == 0) && (($var2 % 2) == 0))
	{
		echo "<p>" . $var1 . " es múltiplo de " . $var2 . " y además " . $var2 . " es número par</p>";
	}
	else
	{
		if(!($var1 % $var2) == 0)
		{
			echo "<p>El número $var1 no es múltimplo de $var2<p>"; /* Si no es divisible, muestra este mensaje */
		}
		if (!($var2 % 2) == 0)
		{
			echo "<p>El número $var2 no es par</p>";
		}
	}

	/* Fin del Ejercicio #########################################################################################*/


	/* Ejercicio aplicando ahora el uso de elseif ################################################################*/

	if (($var1 % $var2) != 0)
	{
		echo "<p>El número $var1 no es múltimplo de $var2<p>"; /* Si no es divisible, muestra este mensaje */
	}
	elseif (($var2 % 2) != 0)
	{
		echo "<p>El número $var2 no es par</p>";
	}
	else
	{
		echo "<p>" . $var1 . " es múltiplo de " . $var2 . " y además " . $var2 . " es número par</p>";
	}

	/* Fin del Ejercicio #########################################################################################*/

	/* Switch */

	$var = 4;

	switch ($var)
	{
		case 1:
			echo "<p>\$var' vale 1</p>";
			break;
		case 2:
			echo "<p>$var vale 2</p>";
			break;
		case 3:
			echo "<p>$var vale 3</p>";
			break;
		
		default:
			echo "<p>\$var no vale ni 1, ni 2 ni 3</p>";
			break;
	}

	$dia = 1;

	switch ($dia)
	{
		case 1:
			echo "<p>Hoy es lunes</p>";
			break;
		case 2:
			echo "<p>Hoy es martes</p>";
			break;
		case 3:
			echo "<p>Hoy es miércoles</p>";
			break;
		case 4:
			echo "<p>Hoy es jueves</p>";
			break;
		case 5:
			echo "<p>Hoy es viernes</p>";
			break;
		case 6:
			echo "<p>Hoy es sábado</p>";
			break;
		case 7:
			echo "<p>Hoy es domingo</p>";
			break;			
		default:
			echo "<p>Ese día no es válido</p>";
			break;
	}

	$numero = 10;
	while($numero < 20)
	{
		echo "Hola<br>";
		$numero++;
	}

	/* Ejercicio de tablas de multiplicar utilizando bucle while*/

	$n = 9; /* Número a multiplicar */
	$i = 1; /* Variable contador */
	echo "<center><table border=1>
	<tr>
		<td colspan=2 ><h2>Tabla del " . $n . " utilizando While</h2></td>
	</tr>";
	while ($i < 11)
	{
		echo "<tr>
		<td>" . $n . " x " . $i . "</td>
		<td>" . $n*$i . "</td>
		</tr>"; /* Primera columna y segunda columna */
		$i++;
	}
	echo "</table></center></br>"; /* Cerramos la tabla y su centrado*/
	?>

	<table border="1">
	<?php
		$multiplicador = 1;
		$numero = 7;
		while ($multiplicador <= 10)
		{
	?>
		<tr>
		<td>
			<?= $numero ?> x <?= $multiplicador ?>
		</td>
		<td>
			<?= $numero * $multiplicador ?>
		</td>
		</tr>
		<?php $multiplicador++;
	}
	?>
	</table>

	<?php

		$valor = 10;
		do
		{
			echo "Hola</br>";
		} while ($valor < 5);

	?>
	
</body>
</html>