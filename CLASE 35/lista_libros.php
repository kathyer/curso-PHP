<?php
	include_once('libro_modelo.php');
	include_once('usuario_modelo.php');
	include('login_snippet.php');

	/*
	Para paginación:
	if (isset($_GET["pagina"]))
	{
		$pagina = $_GET["pagina"];
	}
	else
	{
		$pagina = 1;
	}
	*/

	/* Para pagináción
	$libros = obtenerLibrosPorPagina($pagina);
	*/

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
							<a href="prestar_libro.php?id=<?=$libro["id"]?>" class="btn btn-default btn-xs">
								<span class="glyphicon glyphicon-book" aria-hidden="true"></span> Prestar
							</a>
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