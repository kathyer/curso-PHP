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

	function crearConsulta($parametro, $orden)
	{
		return "SELECT * FROM alumnos ORDER BY $parametro $orden;";
	}

	function getOrden($discriminador)
	{
		if (empty($_GET))
		{
			return "ASC";
		}
		else
		{
			if ($_GET["parametro"] == $discriminador)
			{
				if ($_GET["orden"] == "ASC")
					return "DESC";
				else
					return "ASC";
			}
			else
				return "ASC";
		}
	}

	function validarDatos()
	{
		if (isset($_GET["parametro"]))
		{
			$valores = ["nombre", "apellidos", "edad", "curso", "altura", "sexo"];
			if (!in_array($_GET["parametro"], $valores))
				return false;
		}
		else
		{
			return false;
		}
		if (isset($_GET["orden"]))
		{
			$valoresOrden = ["ASC", "DESC"];
			if (!in_array($_GET["orden"], $valoresOrden))
				return false;
		}
		else
		{
			return false;
		}
		return true;
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

	if (empty($_GET))
	{
		$consulta = "SELECT * FROM alumnos;";
		$resultado = hacerListado($consulta);
	}
	else /* Hay datos en el GET */
	{
		if (validarDatos())
		{
			$consulta = crearConsulta($_GET["parametro"], $_GET["orden"]);
		}
		if (isset($_GET))
		{
			$consulta = "SELECT * FROM alumnos;";
		}

		$resultado = hacerListado($consulta);
	}


	?>

	<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th><a href="index.php?parametro=nombre&orden=<?= getOrden("nombre");?>">Nombre</a></th>
			<th><a href="index.php?parametro=apellidos&orden=<?= getOrden("apellidos");?>">Apellidos</a></th>
			<th><a href="index.php?parametro=edad&orden=<?= getOrden("edad");?>">Edad</a></th>
			<th><a href="index.php?parametro=curso&orden=<?= getOrden("curso");?>">Curso</a></th>
			<th><a href="index.php?parametro=altura&orden=<?= getOrden("altura");?>">Altura</a></th>
			<th><a href="index.php?parametro=sexo&orden=<?= getOrden("sexo");?>">Sexo</a></th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$maximo = count($resultado);
		for ($i = 0; $i < $maximo; $i++)
		{
		?>
			<tr>
				<td><?= $resultado[$i]["nombre"]?></td>
				<td><?= $resultado[$i]["apellidos"]?></td>
				<td><?= $resultado[$i]["edad"]?></td>
				<td><?= $resultado[$i]["curso"]?></td>
				<td><?= $resultado[$i]["altura"]?></td>
				<td><?= $resultado[$i]["sexo"]?></td>
				<td>
					<a class="btn-xs btn-info" href="persona.php?id=<?= $resultado[$i]["id_alumno"]?>"><span class="glyphicon glyphicon glyphicon-eye-open"></span></a>
					<a class="btn-xs btn-success" href=#><span class="glyphicon glyphicon glyphicon-pencil"></span></a>
					<a class="btn-xs btn-danger" href=#><span class="glyphicon glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
		<?php
		}
	?>
	</tbody>
	</table>

</body>
</html>