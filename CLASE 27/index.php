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
			if(!isset($_GET["pais"])) /* No se ha enviado nada de país. Se hace así al ser un array ahora */
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

		function mostrarPaises($paises) // Para mostrar los paises de una forma mas completa, en lugar de mostrar PT, ES, etc. Función propia y no obligatoria.
		{
			$listaDePaises = "";
				for ($i = 0; $i < count($paises); $i++)
				{
					switch($paises[$i])
					{
						case "ES":
							$listaDePaises .= "España";
						break;
						case "PT":
							$listaDePaises .= "Portual";
						break;
						case "AN":
							$listaDePaises .= "Andorra";
						break;
					}
				if ((count($paises) - $i) > 1)
					$listaDePaises .= ", ";
			}
			return $listaDePaises;
		}

		function valorDefault($valor, $placeholder) // Función creada por mi para usar value o placeholder, en caso de restaurar un valor en el formulario si falta algún valor.
		{
			if ($valor == "")
				echo "placeholder=\"" . $placeholder . "\""; // Texto que aparece por defecto, pero cuando se escribe se sustituye.
			else
				echo "value=\"" . $valor . "\"";
		}

		$hayerrores = false; // Para comprobar si hay errores. Lo ponemos a falso.
		
		if ($_GET)
		{
			if (!validarDatos($_GET))
			{
				$hayerrores = true; // Si Hay algún error, lo ponemos a cierto y así podría pintar el formulario.
			}
		}

		$nombre = isset ($_GET["nombre"]) ? ($_GET["nombre"]) : ""; /* Comprueba si existe el nombre enviado por el formulario. Si no se ha enviado nada o es la primera vez que carga la página, lo ponemos a 0. Lo mismo se aplica al resto de variables. */
		$apellidos = isset ($_GET["apellidos"]) ? ($_GET["apellidos"]) : "";
		$localidad = isset ($_GET["localidad"]) ? ($_GET["localidad"]) : "";
		$email = isset ($_GET["email"]) ? ($_GET["email"]) : "";
		$edad = isset ($_GET["edad"]) ? ($_GET["edad"]) : "";

		if (($_GET == NULL) || ($hayerrores == true)) // Si no se ha enviado nada por el formulario (primera vez que abre la página) o se ha encontraro algún error, pintamos el formulario.
		{
		?>
		<form>
			<div class="form-group row">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
				<div class="col-sm-10">
					<input type="text" id="nombre" name="nombre" <?php echo valorDefault($nombre, "Introduzca su nombre");?>/>
				</div>
			</div>
			<div class="form-group row">
				<label for="apellidos" class="col-sm-2 col-form-label">Apellidos: </label>
				<div class="col-sm-10">
					<input type="text" id="apellidos" name="apellidos" <?php echo valorDefault($apellidos, "Introduzca sus apellidos");?> />
				</div>
			</div>
			<fieldset class="form-group row">
				<label class="col-sm-2 col-form-label">Sexo</label>
					<div class="col-sm-10">
					<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" value="Hombre" name="sexo" checked="checked" /> Hombre
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" value="Mujer" name="sexo" /> Mujer
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
					<input type="text" id="localidad" name="localidad" <?php echo valorDefault($localidad, "Introduzca su localidad");?> />
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">email: </label>
				<div class="col-sm-10">
					<input type="email" id="email" name="email" <?php echo valorDefault($email, "Introduzca su eMail");?> />
				</div>
			</div>
			<div class="form-group row">
				<label for="edad" class="col-sm-2 col-form-label">Edad: </label>
				<div class="col-sm-10">
					<input type="text" id="edad" name="edad" <?php echo valorDefault($edad, "Introduzca su edad");?> />
				</div>
			</div>				
			<div class="form-group row">
				<div class="offset-sm-2 col-sm-10">
					<input type="submit" class="btn btn-primary" value="Enviar"/>
					<input type="reset" class="btn btn-primary"  value="Vaciar"/>
				</div>
			</div>
		</form>
		<?php
		}
		else
		{
		?>
		<table border=1>
			<?php
				foreach ($_GET as $indice => $valor)
				{
				?>
					<tr>
						<th><?= $indice ?></th>
						<td><?php
							if (is_array($valor))
								// No usada por que imprime ES, PT, etc: echo implode(", ", $valor);
								echo mostrarPaises($valor);
							else
								echo $valor;
						?></td>
					</tr>
				<?php
				}
				?>
		</table>
		<?php
		}
		?>
</body>
</html>