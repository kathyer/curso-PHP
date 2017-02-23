<?php
	include("usuario_modelo.php");
	include("login_snippet.php");

	$mensajeError = "";
	if ($_POST)
	{
		$resultado = comprobarErroresUsuario($_POST);

		if ($resultado == false)
		{
			$datos =
			[
				"nombre" => $_POST["nombre"],
				"email" => $_POST["email"],
				"contrasena" => cifrarcontrasena($_POST["contrasena"])
			];
			$resultadoGuardar = guardarUsuario($datos);
			if ($resultadoGuardar == false)
			{
				$mensajeError = "<p class=\"alert alert-danger\">No se ha podido guardar el usuario correctamente</p>";
			}
			else
			{
				header("Location: lista_usuarios.php");
			}
		}
		else
		{
			$mensajeError = "<p class=\"alert alert-danger\"> $resultado </p>";
		}
	}
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
	<?= $mensajeError ?>
		<h1>Nuevo Usuario</h1>
		<form method="POST" class="form-horizontal">
			<div class="well col-md-8 col-md-offset-2">

				<div class="form-group">
					<label for="nombre" class="col-sm-4 control-label">Nombre: </label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="nombre" name="nombre">
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-4 control-label">Correo electrónico: </label>
					<div class="col-sm-8">
						<input type="email" class="form-control" id="email" name="email">
					</div>
				</div>
				<hr/>
				<div class="form-group">
					<label for="contrasena" class="col-sm-4 control-label">Contraseña: </label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="contrasena" name="contrasena">
					</div>
				</div>

				<div class="form-group">
					<label for="contrasena2" class="col-sm-4 control-label">Repetir contraseña: </label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="contrasena2" name="contrasena2">
					</div>
				</div>				
				<hr/>

				<input class="btn btn-primary center-block" type="submit" value="Guardar usuario">
				
			</div>
		</form>
	</div>
</body>
</html>