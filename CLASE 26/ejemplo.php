<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Paso de parámetros</title>
	<meta name="Description" content="Examen de curso PHP y HTML. Día 23 de Noviembre de 2016">
	<meta name="author" content="Jose Luis Martín Ávila">
	<!-- Cargamos Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="icon" type="img/png" href="img/icono.png">
</head>
<body>

	<p>
		 <?php

		if (isset($_GET["nombre"]))
		{
			echo "Hola " . $_GET["nombre"];
			echo "<br/><a href=\"ejemplo.php\" class=\"btn btn-primary\" role=\"button\">Volver a la página anterior</a>";
		}
		else
		{
			echo "<form>
			<input type=\"text\" id=\"nombre\" name=\"nombre\" required=\"required\" placeholder=\"Introduzca su nombre\" />
			<input type=\"submit\" class=\"btn btn-primary\" value=\"Enviar\"/>
			</form>";
		}

		?>
	</p>
</body>
</html>