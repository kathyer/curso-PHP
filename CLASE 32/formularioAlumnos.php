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
		<label for="pais" class="col-sm-2 control-label">Curso: </label>
		<div class="col-sm-8">
			<select id="curso" class="form-control" name="curso">
				<option <?php if ($curso == "Primero") echo "selected=\"selected\""; ?> value="Primero">Primero</option>
				<option <?php if ($curso == "Segundo") echo "selected=\"selected\""; ?> value="Segundo">Segundo</option>
				<option <?php if ($curso == "Tercero") echo "selected=\"selected\""; ?> value="Tercero">Tercero</option>
				<option <?php if ($curso == "Cuarto") echo "selected=\"selected\""; ?> value="Cuarto">Cuarto</option>
				<option <?php if ($curso == "Quinto") echo "selected=\"selected\""; ?> value="Quinto">Quinto</option>
				<option <?php if ($curso == "Sexto") echo "selected=\"selected\""; ?> value="Sexto">Sexto</option>
				<option <?php if ($curso == "Septimo") echo "selected=\"selected\""; ?> value="Septimo">Septimo</option>
			</select>
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