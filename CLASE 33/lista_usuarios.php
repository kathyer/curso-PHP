<?php
	include("usuario_modelo.php");
	include("login_snippet.php");

	$usuarios = obtenerTodosLosUsuarios();
?>

<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<META charset="UTF-8">
	<title>Biblioteca</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include("navbar.php");
	?>
	<div class="container-fluid">
		<div class="pull-right">
			<a href="nuevo_usuario.php" class="btn btn-primary">Nuevo Usuario</a>
		</div>

		<h1>Lista de usuarios</h1>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>eMail</th>
					<th>Acciones</th>
				</tr>			
			</thead>
			<tbody>
				<?php
					foreach ($usuarios as $usuario):
				?>
					<tr>
						<td><?= $usuario["nombre"]?></td>
						<td><?= $usuario["email"]?></td>
						<td>
							<a href=ver_usuario.php?id=<?= $usuario["id"]?> class="btn btn-xs btn-info">
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver
							</a>
							<a href=# class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar
							</a>
							<a href=eliminar_usuario.php?id=<?= $usuario["id"]?> class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
							</a>
						</td>
					</tr>
				<?php						
					endforeach;
				?>
			</tbody>
		</table>
	</div>
</body>
</html>