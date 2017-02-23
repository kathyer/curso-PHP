<?php
	include_once('libro_modelo.php');
	include('login_snippet.php');

	$resultado = devolverLibro($_GET["idLibro"]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	<?php
		include('navbar.php');
	?>

<div class="container-fluid">

	<h1>Ver usuario</h1>

	<table class="table table-bordered table-striped">
		<tr>
			<th>Nombre:</th>
			<td><?= $usuario["nombre"] ?></td>
		</tr>
		<tr>
			<th>Correo electrónico:</th>
			<td><?= $usuario["email"] ?></td>
		</tr>
	</table>

	<?php
	$libros = obteneLibrosPrestadosPorUsuario($_GET["id"]);
		if ($libros != false)
		{
		?>
			<h3>Libros prestados</h3>
			<table class="table table-bordered table-striped">
			<?php
				foreach ($libros as $libro)
				{
				?>
				<tr>
					<td><?= $libro["titulo"] ?></td>
					<td>
						<a href="#" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Devolver
						</a>
					</td>
				</tr>
				<?php
				}
			echo "</table>";
		}
	?>


</div>
</body>
</html>