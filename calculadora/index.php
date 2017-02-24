<?php
	include_once("funciones.php");

	/* -1 es el valor comodin. Si vale -1 el resultado, este no se muestra */
	$resultado = "-1";
	$error = "";

	/* Se han recibido datos por POST, en este caso el valor del formulario */
	if ($_POST)
	{

		$numero1 = $_POST["numero1"] ;
		$numero2 = $_POST["numero2"] ;

		$resultado = operacion($_POST["numero1"], $_POST["numero2"], $_POST["operacion"]);

		/* Comprobamos primero que si es una resta, estos números se pueden restar */
		if ($_POST["operacion"] == "restar" && $resultado < 0)
		{
				$error = "<p class='alert alert-danger'>El número no se puede restar, ya que " . $_POST["numero2"] . " es mayor que " . $_POST["numero1"] . ". Reviste los números introducidos</p>";
				$resultado = "-1";
		}



	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br>
<?= $error ?>
<br>
<form class="form-horizontal" method="POST">
	<div class="form-group">
		<label for="numero1" class="col-sm-2 control-label">Número 1</label>
		<div class="col-sm-3">
			<input type="number" class="form-control" name="numero1" id="numero1" value="<?= $numero1 ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="numero2" class="col-sm-2 control-label">Número 2</label>
		<div class="col-sm-3">
			<input type="number" class="form-control" name="numero2" id="numero2" value="<?= $numero2 ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="operacion" class="col-sm-2 control-label">Operación: </label>
		<div class="col-sm-2">
			<select name="operacion" id="operacion" class="form-control">
				<option value="sumar">Sumar</option>
				<option value="restar">Restar</option>
				<option value="multiplicar">Multiplicar</option>
				<option value="dividir">Dividir</option>
			</select>
		</div>
	</div>

	<?php
		if ($resultado != "-1")
		{
	?>
	<div class="form-group">
		<label for="resultado" class="col-sm-2 control-label">Resultado: </label>
		<div class="col-sm-3">
			<input type="number" class="form-control" disabled="disabled" value="<?= $resultado ?>" name="resultado" id="resultado">
		</div>
	</div>
	<?php
		}
	?>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Calcular</button>
		</div>
	</div>

</form>

</body>
</html>