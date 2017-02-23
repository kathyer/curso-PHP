<?php

	if (!isset($seleccionVentas))
		$seleccionVentas = "";
	if (!isset($seleccionAlquiler))
		$seleccionAlquiler = "";
	if (!isset($seleccionPromociones))
		$seleccionPromociones = "";

?>

    <nav class="navbar menuprincipal" role="navigation"> <!-- menuprincipal, color del nav-->
			<div >
                <img src="LOGO/logofondoclaro1.png" class="logo">
				<a class="dulcehogar" href="index.php">Dulce Hogar</a><!-- vovler a la página principal-->
			</div>
			<div>
				<ul class="nav navbar-nav"> <!--quitar puntos de la ul y poner inline-->
					<li <?= $seleccionVentas ?>><a href="ventas.php">Ventas</a></li>
					<li <?= $seleccionAlquiler ?>><a href="alquiler.php">Alquiler</a></li>
					<li <?= $seleccionPromociones ?>><a href="promociones.php">Promociones</a></li>
					<li><a href="#contacto">Contacto</a></li>
				</ul>
				<div class="col-sm-3 col-md-3 pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Buscar" name="q">
							<div class="input-group-btn">
								<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</div>        
			</div>
		</nav>