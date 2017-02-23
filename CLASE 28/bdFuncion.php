<?php

	function hacerListado($consulta)
	{
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

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		$listado = []; /* Creamos un array vacío, que será lo que nos devuelva al final de la función */

		if ($resultado)
		{
			/*
			MYSQLI_ASSOC: Devuelve la consulta con índices asociativos
			MYSQLI_NUM: Devuelve la consulta con índices numéricos
			mysqli_fetch_array convierte los datos en un array, el cual aprovechamos
			para meter en listado y luego poder devolverlo para tratar con el mas facilmente.
			*/
			while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
			{
				$listado[] = $fila;
			}
		}

		mysqli_free_result($resultado); /* Libera la memoria ocupada por la consulta */
		mysqli_close($enlace); /* Cerrar la conexión */

		return $listado;
	}

?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Bases de datos</title>
</head>
<body>		
		<?php

		$peliculas = hacerListado("SELECT COUNT(*) as total, nombre AS genero FROM movies.peliculas JOIN movies.genero ON peliculas.genero_id=genero.id GROUP BY genero HAVING total >= 2;");

		echo "<pre>";
		print_r($peliculas);
		echo "</pre>";

		?>
</body>
</html>