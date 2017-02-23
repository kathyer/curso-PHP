<?php

	$arrayCiudades =
	[
		1 => 
		[
			["id" => 11, "nombre" => "Badajoz"],
			["id" => 12, "nombre" => "Valdebótoa"],
			["id" => 13, "nombre" => "Don Benito"]
		],
		2 => 
		[
			["id" => 21, "nombre" => "Caceres"],
			["id" => 22, "nombre" => "Coria"],
			["id" => 23, "nombre" => "Plasencia"]
		],
		3 => 
		[
			["id" => 31, "nombre" => "Bilbao"],
			["id" => 32, "nombre" => "Durango"],
			["id" => 33, "nombre" => "Miravalles"]
		]
	];

	$idCiudad = $_GET["id"];
	$ciudadesJason = json_encode($arrayCiudades[$idCiudad]);
	echo $ciudadesJason
?>