<?php
	include("usuario_modelo.php");

	session_start();
	$mensajeError = "";

	if($_POST)
	{
		$usuario = obtenerUsuarioPorEmalYContrasena($_POST["email"], cifrarContrasena($_POST["contrasena"]));
		if ($usuario == false)
		{
			$mensajeError = "<p class=\"alert alert-danger\">Correo electrónico o contraseña no existen</p>";
		}
		else
		{
			$_SESSION["usuario"] = $usuario;
			header("Location: lista_usuarios.php");
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

	<h1>Identificación de usuario</h1><br/>

		<form method="POST" class="form-horizontal">
			<div class="well col-md-8 col-md-offset-2">

				<div class="form-group">
					<label for="email" class="col-sm-4 control-label">Correo electrónico: </label>
					<div class="col-sm-8">
						<input type="email" class="form-control" id="email" name="email">
					</div>
				</div>

				<div class="form-group">
					<label for="contrasena" class="col-sm-4 control-label">Contraseña: </label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="contrasena" name="contrasena">
					</div>
				</div>

				<input class="btn btn-primary center-block" type="submit" value="Entrar">
			</div>
		</form>
	</div>
</body>
</html>