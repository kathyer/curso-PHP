<?php

	function descripcionBreve($descripcion)
	{
		$subcadena2 = substr($descripcion, 100);
		$posicionEspacio = strpos($subcadena2, " ");
		return substr($descripcion, 0,  100 + $posicionEspacio) . "...";
	}

	function formatearPrecio($precio)
	{
		return number_format($precio, 2, ",", ".");
	}

?>