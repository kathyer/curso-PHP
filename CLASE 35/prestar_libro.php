
<?php
	include_once('libro_modelo.php');
	include_once('usuario_modelo.php');
	include('login_snippet.php');

	$mensajeError = "";
	$error = false;

	$usuarios = obtenerNombresDeUsuario();

	if (empty($_GET["id"]))
	{
		$mensajeError = "<p class=\"alert alert-danger\">Los parámetros no son correctos</p>";
		$error = true;
	}
	else
	{
		if (existeLibro($_GET["id"]))
			$libro = obtenerLibroPorId($_GET["id"]);
		else
		{
			$mensajeError = "<p class=\"alert alert-danger\">El libro solicitado no existe</p>";
			$error = true;
		}
	}


		if($_POST)
		{
			if (prestarLibro($_POST["idLibro"], $_POST["usuario"]))
				header("Location: lista_libros.php");
			else
				$mensajeError = "<p class=\"alert alert-danger\">Ha ocurrido un error y no es posible prestar el libro</p>";
		}

	ob_start();
	?>

	<?php
	echo $mensajeError;
	if (!$error)
	{
	?>

	<form method="POST" class="form-horizontal">

		<div class="well col-md-8 col-md-offset-2">

			<div class="form-group">
				<label for="tituloLibro" class="col-md-4 control-label">Titulo del libro</label>
				<div class="col-md-8">
					<input type="text" class="form-control" id="titulo" name="titulo" disabled="disabled" value="<?= $libro["titulo"]?>">
					<input type="hidden" name="idLibro" value="<?= $libro["id"]?>">
				</div>
			</div>

			<div class="form-group">
				<label for="usuario" class="col-md-4 control-label">Prestar a:</label>
				<div class="col-md-8">
					<select class="form-control" id="usuario" name="usuario">
					<?php
						foreach ($usuarios as $usuario)
						{
					?>
							<option value="<?= $usuario["id"]?>"><?= $usuario["nombre"]?></option>
					<?php
						}
					?>						
					</select>
				</div>
			</div>

			<button type="submit" class="btn btn-primary center-block">Prestar</button>
		</div>
	</form>

	<?php
	}
		$contenidoDeLaPagina = ob_get_contents();
		$tituloDePagina = "Prestar libro";
		ob_end_clean();

		include("master.php");
	?>