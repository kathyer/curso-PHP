<?php
	include ("funciones.php");
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Nuevo alumno</title>
	<meta name="author" content="Jose Luis Martín Ávila">
	<!-- Cargamos Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
body
{
	padding-top: 30px;
}

</style>
<body>

<?php

	if($_POST)
	{

		if (validarNuevoAlumno())
		{
			$consulta = "INSERT INTO alumnos (nombre, apellidos, edad, curso, altura, sexo) VALUES ('" . $_POST["nombre"] . "', '" . $_POST["apellidos"] . "', " . $_POST["edad"] . ", '" . $_POST["curso"] . "', " . $_POST["altura"] . ", '" . $_POST["sexo"] . "');";

			echo $consulta;
		}
		else
		{
			"Datos erróneos";
		}

	}

?>

	<div class="container">
		<form action="formulario.php" method="POST">
			<div class="form-group row">
				<legend class="col-form-legend col-sm-2">Nuevo alumno</legend>
			</div>
			<div class="form-group row">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
				<div class="col-sm-10">
					<input type="text" id="nombre" name="nombre" required="required" placeholder="Introduzca su nombre" />
				</div>
			</div>
			<div class="form-group row">
				<label for="apellidos" class="col-sm-2 col-form-label">Apellidos: </label>
				<div class="col-sm-10">
					<input type="text" id="apellidos" name="apellidos" required="required" placeholder="Introduzca sus apellidos" />
				</div>
			</div>
			<div class="form-group row">
				<label for="edad" class="col-sm-2 col-form-label">Edad: </label>
				<div class="col-sm-10">
					<input type="number" id="edad" name="edad" required="required" placeholder="Introduzca su edad" min="0" />
				</div>
			</div>
			<div class="form-group row">
				<label for="pais" class="col-sm-2 col-form-label">Curso: </label>
				<div class="col-sm-10">
					<select id="curso" name="curso">
						<option value="Primero">Primero</option>
						<option value="Segundo">Segundo</option>
						<option value="Tercero">Tercero</option>
						<option value="Cuarto">Cuarto</option>
						<option value="Quinto">Quinto</option>
						<option value="Sexto">Sexto</option>
						<option value="Septimo">Séptimo</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="altura" class="col-sm-2 col-form-label">Altura: </label>
				<div class="col-sm-10">
					<input type="number" id="altura" name="altura" required="required" placeholder="Introduzca la altura en cms" min="0" />
				</div>
			</div>
			<fieldset class="form-group row">
				<label class="col-sm-2 col-form-label">Sexo</label>
				<div class="col-sm-10">
					<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" value="H" name="sexo" checked="checked" /> Hombre
						</label>
	        		</div>
	        		<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" value="M" name="sexo" /> Mujer
	          			</label>
	          		</div>
				</div>
			</fieldset>	
			<div class="form-group row">
				<div class="offset-sm-2 col-sm-10">
					<input type="submit" class="btn btn-primary" value="Añadir"/>
					<input type="reset" class="btn btn-primary"  value="Vaciar"/>
				</div>
			</div>
		</form>	
	</div>
</body>
</html>