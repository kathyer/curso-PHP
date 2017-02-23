<?php
	include ('usuario_modelo.php');
	include('login_snippet.php');
	
	if (!empty($_GET["id"])) {
		$resultado = eliminarUsuarioPorId($_GET["id"]);
		if ($resultado == true) {
			header("Location: lista_usuarios.php");
		}
	} else {
		header("Location: lista_usuarios.php");
	}
?>
	<?php
		ob_start();
	?>
	<?php
		if ($resultado == false):
	?>
	<p class="alert alert-danger">No se ha encontrado ese usuario.</p>
	<?php
		endif;
		
		$contenidoDeLaPagina = ob_get_contents();
		ob_end_clean();

		include("master.php");
	?>