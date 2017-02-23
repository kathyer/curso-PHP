<?php
	include("usuario_modelo.php");
	include("login_snippet.php");

	if (!empty($_GET["id"]))
	{
		$usuario = obtenerUsuarioPorId($_GET["id"]);
		if ($usuario == false)
		{
			echo "<p class='alert alert-danger'>No existe ese usuario</p>";
		}
	}
	else
	{
		echo "<p class='alert alert-danger'>Error al tratar de localizar al usuario</p>";
	}
?>

<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<META charset="UTF-8">
	<title>Usuario</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include("navbar.php");
	?>
	<div class="container-fluid">
		<h1>Datos de usuario</h1>
		<table class="table table-bordered table-striped">
			<tr>
				<th>Nombre</th>
				<td><?= $usuario["nombre"]?></td>
			</tr>
			<tr>
				<th>eMail</th>
				<td><?= $usuario["email"]?></td>
			</tr>
			<tr>
				<th>Contraseña:</th>
				<td><?= $usuario["contrasena"]?></td>
			</tr>
		</table>
	</div>
</body>
</html>