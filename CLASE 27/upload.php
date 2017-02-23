	<?php

	$mensaje = ""; /* Declaramos las variables fuera, las cuales estarán vacías y se imprimirán vacías en el caso de que no se haya enviado un archivo. Es decir, al cargar por primera vez la página. Siempre que se muestra la página imprime el mensaje de error o éxito en la subida de ficheros, y muestra la imagen subida. Si es la primera vez al cargar la página, estas estarán vacías y no mostrará nada, pero si se utiliza el formulario, estas tomarán otro valor. */
	$imagen = "";

		if (isset($_FILES["archivo"]))
		{
			/*
			echo "<pre>";
			print_r($_FILES["archivo"]);
			echo "</pre>";
			*/
			$path = "subidas/";
			$file_path = $path . basename($_FILES["archivo"]["name"]); /* basename hace que elimine la ruta completa y deje solo el nombre del archivo */
			if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $file_path)) /* Se mueve el archivo subido a la dirección indicada en filepath*/
			{
				$mensaje = "<p>Archivo subido correctamente. Prueba</p>";
				$imagen = "<img src=\"" . $file_path . "\"/>\n";
			}
			else
			{
				$menasje = "<p>No ha podido subirse el archivo</p>";
				$imagen = "";
			}
		}	
	?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Subida de ficheros</title>
	<meta name="Description" content="Examen de curso PHP y HTML. Día 23 de Noviembre de 2016">
	<meta name="author" content="Jose Luis Martín Ávila">
	<!-- Cargamos Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="icon" type="img/png" href="img/icono.png">
</head>
<body>

	<?= $mensaje ?> 
	<?= $imagen ?>

	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo"> 
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
		<br/>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>