<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Bases de datos</title>
</head>
<body>		
		<?php

		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "movies"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);

		$consulta = "SELECT * FROM peliculas;"; /* Generamos la consulta SQL */
		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		if ($resultado)
		{
			/*
			MYSQLI_ASSOC: Devuelve la consulta con índices asociativos
			MYSQLI_NUM: Devuelve la consulta con índices numéricos
			*/
			$contador = 0;
			while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
			{
				echo "<p>Elemento " . $contador . "</p>";
				foreach ($fila as $indice => $valor) {
					echo "<p>" . $indice . ": " . $valor . "</p>";
				}
				$contador++;
				/*
				echo "<pre>";
				print_r($fila);
				echo "</pre>";
				*/
			}
		}

		mysqli_free_result($resultado); /* Libera la memoria ocupada por la consulta */
		mysqli_close($enlace); /* Cerrar la conexión */

		?>
</body>
</html>