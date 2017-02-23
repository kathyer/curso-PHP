<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Paso de parámetros</title>
	<meta name="Description" content="Examen de curso PHP y HTML. Día 23 de Noviembre de 2016">
	<meta name="author" content="Jose Luis Martín Ávila">
	<!-- Cargamos Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="icon" type="img/png" href="img/icono.png">
</head>
<body>

		
		<?php

		function validarDatos($datos)
		{
			if(!isset($_GET["pais"])) /* No se ha enviado nada de país */
			{
				return false;
			}

			foreach($datos as $dato)
			{
				if (is_array($dato))
				{
					if (count($dato) <= 0)
						return false;
				}
				else if ($dato == "")
				{
					return false;
				}
			}

			return true;
		}

		$hayerrores = false;
		
		if ($_GET)
		{
			if (!validarDatos($_GET))
			{
				echo "<p>Hay un error. Debe compeltar todos los datos</p>";
			}
			else
			{
				foreach ($_GET as $indice => $valor)
				{
					if (!is_array($valor))
						echo "<p>" . $indice . ": " . $valor . "</p>";
					else
					{
						echo "<p>Paises: ";
						foreach ($valor as $pais)
						{
							echo $pais . ", ";
						}
						echo "</p>";
					}
				}
			}
		}

		?>
		<form>
			<div class="form-group row">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
				<div class="col-sm-10">
					<input type="text" id="nombre" name="nombre" placeholder="Introduzca su nombre" />
				</div>
			</div>
				<div class="form-group row">
					<label for="apellidos" class="col-sm-2 col-form-label">Apellidos: </label>
					<div class="col-sm-10">
						<input type="text" id="apellidos" name="apellidos" placeholder="Introduzca sus apellidos" />
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
					<label for="pais" class="col-sm-2 col-form-label">País: </label>
					<div class="col-sm-10">
						<select id="pais" name="pais[]" multiple="multiple">
							<option value="ES">España</option>
							<option value="PT">Portugal</option>
							<option value="AN">Andorra</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="localidad" class="col-sm-2 col-form-label">Localidad: </label>
					<div class="col-sm-10">
						<input type="text" id="localidad" name="localidad" placeholder="Introduzca su localidad" />
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">email: </label>
					<div class="col-sm-10">
						<input type="email" id="email" name="email" placeholder="Introduzca su correo electrónico" />
					</div>
				</div>
				<div class="form-group row">
					<label for="edad" class="col-sm-2 col-form-label">Edad: </label>
					<div class="col-sm-10">
						<input type="text" id="edad" name="edad" placeholder="Introduzca su edad" />
					</div>
				</div>				
				<div class="form-group row">
					<div class="offset-sm-2 col-sm-10">
						<input type="submit" class="btn btn-primary" value="Enviar"/>
						<input type="reset" class="btn btn-primary"  value="Vaciar"/>
					</div>
				</div>
			</form>
</body>
</html>