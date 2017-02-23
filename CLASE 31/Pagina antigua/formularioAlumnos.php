<html>
<head>
	<meta charset="utf-8">
	<title>BASES DE DATOS</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">
	<h1>NUEVO ALUMNO</h1>
	<br/>

	<?= $mensajeValidacion ?>

	<form class="form-horizontal col-md-offset-1" method="POST">

	<div class="form-group">
		<label for="nombre" class="col-sm-2 control-label">Nombre:</label>
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control" required="required" value="<?= $nombre ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="apellidos" class="col-sm-2 control-label">Apellidos:</label>
		<div class="col-sm-8">
			<input type="text" name="apellidos" class="form-control" required="required" value="<?= $apellidos ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="edad" class="col-sm-2 control-label">Edad:</label>
		<div class="col-sm-8">
			<input type="text" name="edad" class="form-control" required="required" value="<?= $edad ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="curso" class="col-sm-2 control-label">Curso:</label>
		<div class="col-sm-8">
			<input type="text" name="curso" class="form-control" required="required" value="<?= $curso ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="altura" class="col-sm-2 control-label">Altura (cm):</label>
		<div class="col-sm-8">
			<input type="number" name="altura" class="form-control" required="required" value="<?= $altura ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Sexo:</label>
		<div class="col-sm-8">
			<label class="radio-inline">
				<input type="radio" name="sexo" value="H" checked="checked" value="<?= $sexo ?>"> Hombre
			</label>
			<label class="radio-inline">
				<input type="radio" name="sexo" value="M"> Mujer
			</label>
		</div>
	</div>

	<br/>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-primary">Guardar alumno</button>
		</div>
	</div>

	</form>
</div>
</body>
</html>