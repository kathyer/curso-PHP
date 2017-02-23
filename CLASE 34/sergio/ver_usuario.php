<?php
	include_once('usuario_modelo.php');
	include('login_snippet.php');

	$usuario = obtenerUsuarioPorId($_GET["id"]);
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
</div>
</body>
</html>