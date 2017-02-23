<?php
	include ("funciones.php");
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

	/* Si la url está vacía (sin parámetros, al iniciar por primera vez) genero la consulta normal */
	if (empty($_GET))
	{
		$consulta = "SELECT * FROM alumnos LIMIT 0, 5;";
	}
	else /* Hay datos en el GET */
	{
		/* Si hay datos y su validación es correcta, entonces genero una nueva consulta ordenando los valores con los
		parámetros pasados */
		if (validarDatos())
		{
			$consulta = crearConsulta($_GET["parametro"], $_GET["orden"], $_GET["pagina"]);
		}
		else
		{
			/* Si los parámetros pasados son incorrectos, genero una consulta estándar */
			$consulta = "SELECT * FROM alumnos LIMIT 0, 5;";
		}
	}

	/* Ahora que la consulta está hecha, la llamo para conseguir los datos */
	$resultado = hacerListado($consulta);


	?>

	<h2> Listado de alumnos </h2>

	<div align="right"><a href="formulario.php"><button class="btn btn-primary" >Nuevo</button></a></div>

	<br/>

	<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th><a href="index.php?parametro=nombre&orden=<?= getOrden("nombre");?>&pagina=0">Nombre</a></th>
			<th><a href="index.php?parametro=apellidos&orden=<?= getOrden("apellidos");?>&pagina=0">Apellidos</a></th>
			<th><a href="index.php?parametro=edad&orden=<?= getOrden("edad");?>&pagina=0">Edad</a></th>
			<th><a href="index.php?parametro=curso&orden=<?= getOrden("curso");?>&pagina=0">Curso</a></th>
			<th><a href="index.php?parametro=altura&orden=<?= getOrden("altura");?>&pagina=0">Altura</a></th>
			<th><a href="index.php?parametro=sexo&orden=<?= getOrden("sexo");?>&pagina=0">Sexo</a></th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach ($resultado as $datoAlumno)
		{
		?>
			<tr>
				<td><?= $datoAlumno["nombre"]?></td>
				<td><?= $datoAlumno["apellidos"]?></td>
				<td><?= $datoAlumno["edad"]?></td>
				<td><?= $datoAlumno["curso"]?></td>
				<td><?= $datoAlumno["altura"]?></td>
				<td><?= $datoAlumno["sexo"]?></td>
				<td>
					<a class="btn-xs btn-info" href="persona.php?id=<?= $datoAlumno["id_alumno"]?>"><span class="glyphicon glyphicon glyphicon-eye-open"></span></a>
					<a class="btn-xs btn-success" href=#><span class="glyphicon glyphicon glyphicon-pencil"></span></a>
					<a class="btn-xs btn-danger" href=#><span class="glyphicon glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
		<?php
		}
	?>
	</tbody>
	</table>

	<center>
		<a class="btn btn-success" href=index.php<?=urlActual()?>&pagina=<?=getPrimerBoton()?>><?=getPrimerBoton()?></a>
		<a class="btn btn-success" href=index.php<?=urlActual()?>&pagina=<?=getAnteriorBoton()?>>Anterior</a>
		<a class="btn btn-success" href=index.php<?=urlActual()?>&pagina=<?=getSiguienteBoton()?>>Siguiente</a>
		<a class="btn btn-success" href=index.php<?=urlActual()?>&pagina=<?=getUltimoBoton()?>><?=getUltimoBoton()?></a>
	</center>

</body>
</html>