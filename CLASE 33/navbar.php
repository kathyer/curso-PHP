<nav class="navbar navbar-default">
 	<div class="container-fluid">
		<div class="navbar-header">
			<a href="lista_usuarios.php" class="navbar-brand">Biblioteca</a>

		</div>
		<?php
			if (isset($_SESSION["usuario"]))
			{
				echo "Hola " . $_SESSION["usuario"]["nombre"];
				echo "<a href=\"cerrar_sesion.php\" class=\"btn btn-primary\">Cerrar sesión</a>";
			}
		?>
	</div>
</nav>