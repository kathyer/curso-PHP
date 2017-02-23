<?php

	function hacerListado($consulta)
	{
		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "bdalumnos"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		$listado = []; /* Creamos un array vacío, que será lo que nos devuelva al final de la función */

		if ($resultado)
		{
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
	<title>Tabla de base de datos</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="Description" content="Ejercicio de repaso de formularios"/><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>		
	<?php

	$consulta = "SELECT * FROM alumnos WHERE id_alumno = " . $_GET["id"] . ";";
	$resultado = hacerListado($consulta)[0];

	?>
	<h3>Datos del alumno</h3>
	<table class="table table-striped table-bordered">
	<thead>
	</thead>
	<tbody>
		<tr>
			<th>Nombre</th>
			<td><?= $resultado["nombre"]?></td>
		</tr>
		<tr>
			<th>Apellidos</th>
			<td><?= $resultado["apellidos"]?></td>
		</tr>
		<tr>
			<th>Edad</th>
			<td><?= $resultado["edad"]?></td>
		</tr>
		<tr>
			<th>Curso</th>
			<td><?= $resultado["curso"]?></td>
		</tr>
		<tr>
			<th>Altura</th>
			<td><?= $resultado["altura"]?></td>
		</tr>
		<tr>
			<th>Sexo</th>
			<td><?= $resultado["sexo"]?></td>
		</tr>
	</tbody>
	</table>

</body>
</html>