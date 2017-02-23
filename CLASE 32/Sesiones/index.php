<?php
	session_start();
	include("funciones.php");

	if (!isset($_SESSION["usuario"]))
		header("Location: login.php");

?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BASES DE DATOS</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">

	<h1>Si puedes ver esto, estás logeado</h1>
	<a href="logout.php">Cerrar sesión</a>

</div>
</body>
</html>