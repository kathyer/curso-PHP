<?php
	include_once('libro_modelo.php');
	include_once('usuario_modelo.php');
	include('login_snippet.php');

	$libros = obtenerTodosLosLibros();
	$usuarios = obtenerNombresDeUsuario();

	ob_start();
	?>

	<h1>Lista de libros</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Libro</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
		<?php
			foreach ($libros as $libro):
		?>
			<tr>
				<td><?= $libro['titulo'] ?></td>
				<td>
					<a href="#" class="btn btn-info btn-xs">
						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver
					</a>
					<a href="#" class="btn btn-success btn-xs">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar
					</a>
					<a href="#" class="btn btn-danger btn-xs">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar
					</a>
					<?php
						if (!libroEstaPrestadoPorId($libro["id"]))
						{
					?>
					<form method="POST">
							<select>
							<?php
								foreach ($usuarios as $usuario)
								{
							?>
									<option value="<?= $usuario["id"]?>"><?= $usuario["nombre"]?></option>
							<?php
								}
							?>
							</select>
							<input class="btn btn-default btn-xs" type="submit" value="Prestar">
						</form>
					<?php
						}
					?>					
				</td>
			</tr>
		<?php
			endforeach;
		?>
		</tbody>
	</table>

	<?php
		$contenidoDeLaPagina = ob_get_contents();
		$tituloDePagina = "Lista de libros";
		ob_end_clean();

		include("master.php");
	?>