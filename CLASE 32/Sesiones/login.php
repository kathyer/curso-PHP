<?php
	session_start();
	include("funciones.php");

	// Los valores iniciales de los datos los ponemos aquí. 
	$email = "";

	$mensajeValidacion = "";

	// Comprobamos si hay datos enviados por POST.
	if ($_POST)
	{
		$validacion = logearUsuario($_POST);
		if ($validacion != "OK")
		{
			$mensajeValidacion = "<p class='alert alert-danger'>" . $validacion . "</p>";
			$email = isset($_POST["email"]) ? $_POST["email"] : "";
		}
		else
		{
			$mensajeValidacion = "<p class='alert alert-success'>Usuario Logeado</p>";
			$_SESSION["usuario"] = obtenerIdPorEmail($_POST["email"]);
			header("Location: index.php");
		}
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">

	<h1>Entrar al sistema</h1>
	<br/>

	<?= $mensajeValidacion ?>
	
	<form class="form-horizontal col-md-offset-1" method="POST">

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">eMail:</label>
			<div class="col-sm-8">
				<input type="text" name="email" class="form-control" required="required" value="<?= $email ?>"></input>
			</div>
		</div>

		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">Contraseña:</label>
			<div class="col-sm-8">
				<input type="password" name="password" class="form-control" required="required" value=""></input>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
				<button type="submit" class="btn btn-primary">Acceder</button>
			</div>
		</div>

	</form>

	<p> ¿Eres nuevo? Registrate <a href="registroUsuario.php">aquí</a></p>

</div>
</body>
</html>