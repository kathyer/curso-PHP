<?php
    include_once("funciones.php");
    include_once("vivienda_modelo.php");

    $viviendas= obtenerViviendasAlquiler();
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inmobiliaria Dulce Hogar</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="LOGO/logofondoscuro.png">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	

</head>

<body>
    <!-- Navegacion -->
   <?php

    $seleccionAlquiler = "class=\"elementoSeleccionado\"";
   include("navbar.php");

   ?>
    <!-- Contenido de la pagina -->
    <div class="container slide"><!--margin con el nav-->

        <div class="row">

                <div class="row pisos"> <!-- pisos, darle margin con el slide-->

                <?php
                    foreach ($viviendas as $vivienda):
                ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $vivienda["urlImagen"] ?>" alt="Casa alquiler número 1">
                            <div class="caption">
                                <h4 class="pull-right"><?= formatearPrecio($vivienda["precio"])?></h4>
                                <h4><a href="ver_vivienda.php?id=<?= $vivienda["id_viviendas"] ?>"><?= $vivienda["nombre"]?></a>
                                </h4>
                                <p><?= descripcionBreve($vivienda["descripcion"])?></p>
                            </div>
                            <div class="iconos">
                                <p>
                                    <i class="fa fa-bed" aria-hidden="true"></i> 2
                                    <i class="fa fa-bath" aria-hidden="true"></i> 2
                                    <span class="glyphicon glyphicon-move"></span> 2
                                </p>
                            </div>
                        </div>
                    </div>

                <?php
                    endforeach;
                ?>
                 

                </div>

            </div>

        </div>

    </div>        

<?php
    include("final_master.php");

?>


</body>

</html>