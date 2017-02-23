<?php
	include_once('libro_modelo.php');
	include('login_snippet.php');

	if ($_GET)
	{
		prestarLibro($idLibro, $idCliente)
	}
	else
	{
		header("Location: lista_libros.php");
	}

?>