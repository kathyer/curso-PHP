<?php
	include('usuario_modelo.php');

	session_start();
	if ($_POST) {
		$usuario = obtenerUsuarioPorEmailYContrasena($_POST["email"], cifrarContrasena($_POST["contrasena"]));
		if ($usuario == false) {
			$mensajeError = "El email o contraseña no coinciden";
		} else {
			$_SESSION["usuario"] = $usuario;
			header("Location: lista_usuarios.php");
		}
	}
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

	<h1>Identificación de usuarios</h1>

	<?php
		if (!empty($mensajeError)) {
			echo '<p class="alert alert-danger">' . $mensajeError . '</p>';
		}
	?>

	<form method="POST" class="form-horizontal">

		<div class="well col-md-8 col-md-offset-2">

			<div class="form-group">
    			<label for="email" class="col-md-4 control-label">Correo electrónico</label>
    			<div class="col-md-8">
      				<input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email">
    			</div>
  			</div>

			<div class="form-group">
    			<label for="contrasena" class="col-md-4 control-label">Contraseña</label>
    			<div class="col-md-8">
      				<input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena">
    			</div>
  			</div>

  			<button type="submit" class="btn btn-primary center-block">Identifícate</button>

		</div>
	</form>

</div>
</body>
</html>