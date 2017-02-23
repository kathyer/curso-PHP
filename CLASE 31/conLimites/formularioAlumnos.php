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

	<br/>

	<div class="form-group">
		<label class="col-sm-2 control-label">Sexo:</label>
		<div class="col-sm-8">
			<label class="radio-inline">
				<input type="radio" name="sexo" value="H" <?php if ($sexo == "H") echo "checked=\"checked\""; ?>> Hombre
			</label>
			<label class="radio-inline">
				<input type="radio" name="sexo" value="M" <?php if ($sexo == "M") echo "checked=\"checked\""; ?>> Mujer
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-primary">Guardar alumno</button>
		</div>
	</div>
</form>