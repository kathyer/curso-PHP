<?php

	function darLaVuelta($ficheroOrigen, $ficheroDestino = "textoInverso.txt")
	{
		/* nombre es el nombre del fichero o la ruta del mismo */
		$archivo = fopen($ficheroOrigen, "r") or die("Ha habido un error"); // Abrir un fichero
		$archivoSalida = fopen($ficheroDestino, "w") or die("Ha habido un error"); // Abrir un fichero

		$contenidoDelFichero = [];

		while (!feof($archivo))
		{
			$linea = fgets($archivo); // Lee una cadena de texto;
			$contenidoDelFichero[] = $linea;
		}

		/* Fichero leído con todo su contenido en la variable $contenidoDelFichero */

		for ($i = (count($contenidoDelFichero) - 1); $i >= 0; $i--)
		{
			fwrite($archivoSalida, $contenidoDelFichero[$i]);
		}

		fclose($archivo);
		fclose($archivoSalida);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lectura y escritura de ficheros</title>	
</head>
<body>
	<?php

	/*
	r: Fichero de solo lectura
	+: Se puede escribir en el fichero, al final del fichero, pero se puede mover con punteros.
	w: Escribe, pero si existe el archivo lo sobreescribe. Si no existe, da error.
	w+: igual que w, pero si no existe lo crea.
	a: añadir al final
	a+: añade al final pero permite leer.
	*/

	/* Ejemplo de lectura de ficheros */
		$archivo = fopen("ficherosPHP\\texto.txt", "r+") or die("Ha habido un error"); // Abrir un fichero

		$nLinea = 0;
		while (!feof($archivo))
		{
			$linea = fgets($archivo); // Lee una cadena de texto;
			echo "Linea: $nLinea. Contenido: $linea <br/>";
			$nLinea++;
		}

		fclose($archivo); // cerrar un fichero.

		$archivo2 = fopen("ficherosPHP\\texto2.txt", "a") or die("Ha habido un error al abrir el segundo fichero"); // Abrir un fichero

		/* Carácter de salto de línea: \n */

		fwrite($archivo2, "Prefiero los villancicos\n");
		fwrite($archivo2, "antes que el reggaeton\n");
		fclose($archivo2);

		darLaVuelta("ficherosPHP\\texto.txt", "ficherosPHP\\textoInverso.txt");

		/* Ejercicio
		Invertir un fichero de texto */

		$archivoSalida = fopen("ficherosPHP\\textoInverso.txt", "r+") or die("Ha habido un error"); // Abrir un fichero

		while (!feof($archivoSalida))
		{
			$linea = fgets($archivoSalida); // Lee una cadena de texto;
			echo $linea;
		}

		fclose($archivoSalida); // cerrar un fichero.

		echo "<hr/>";

		/* Ejercicio: 
		Crear una carpeta, comprobar si existe, borrar la carpeta y volver a comprobar si existe. */

		mkdir("carpetaPrueba");

		if (is_dir("carpetaPrueba"))
			echo "La carpeta carpetaPrueba creada existe <br/>";
		else
			echo "La carpeta (carpetaPrueba) no existe";

		rmdir("carpetaPrueba");

		if (is_dir("carpetaPrueba"))
			echo "La carpeta carpetaPrueba creada existe <br/>";
		else
			echo "La carpeta (carpetaPrueba) no existe";

		copy("texto.txt", "copia.txt"):
	?>
</body>
</html>