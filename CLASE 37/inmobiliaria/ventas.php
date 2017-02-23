<?php
    include_once("vivienda_modelo.php");
    include_once("slider_modelo.php");
    include_once("funciones.php");
    $viviendas = obtenerViviendasVenta();
?>



<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ventas</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="LOGO/logofondoscuro.png">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Navegacion -->
    <?php
        $seleccionVentas = "class=\"elementoSeleccionado\"";
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
                        <div class="thumbnail"> <!--cajas de los pisos-->
                           <a href="ver_vivienda.php?id=<?= $vivienda["id_viviendas"] ?>"><img src="<?= $vivienda["urlImagen"] ?>" alt="Casa número 1"></a>
                            <div class="caption">
                            <h4><a href="#"><?= $vivienda["nombre"] ?></a></h4>
                                    <?php
                                        if ($vivienda["precio_v_promocion"] != null & $vivienda["precio_v_promocion"] != "0")
                                        {
                                            echo "<h5 class=\"pull-right\"><s>" . formatearPrecio($vivienda["precio"]) ." €</s></h5>";
                                            echo "<h3>Oferta: " . $vivienda["precio_v_promocion"] . " €</h3>";
                                        }
                                        else
                                        {
                                            echo "<h4 class=\"pull-right\">" . formatearPrecio($vivienda["precio"]) ." €</h4>";
                                        }
                                    ?>
                                <div>
                                    <p><?= descripcionBreve($vivienda["descripcion"]) ?></p>
                                </div>
                                <div class="iconos">
                                    <p>
                                        <i class="fa fa-bed" aria-hidden="true"></i> <?= $vivienda["dormitorios"] ?>
                                        <i class="fa fa-bath" aria-hidden="true"></i> <?= $vivienda["banos"] ?>
                                        <span class="glyphicon glyphicon-move"></span> <?= $vivienda["superficie"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    endforeach;
                    ?>

                </div>                    

        </div>

    </div>

	<footer class="estiloFooter">
    <a name="contacto"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class=" col-sm-6 col-lg-6 col-md-6" >

                            <div>
                                <div class="col-sm-6 col-lg-6 col-md-6 direccion">
                                    <img src="LOGO/logofondoscuro.png" width="70%">
                                </div>
                                 <div class="col-sm-6 col-lg-6 col-md-6 direccion">
                                        <h3>DULCE HOGAR</h3>

                                        <p class="calle">
                                            C/ Sal si puedes nº 69 Bajo</br>
                                            Localidad: Narnia</br>
                                            Pais: El de Peter Pan</br>
                                            Teléfono: 654321987</br>
                                            DulceHogar@gmail.com</br>
                                        </p>
                                </div>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1553.055506083714!2d-6.9692234422765456!3d38.87570189382802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd16e43eac5f354d%3A0x688c7e359714a4a9!2sBadajoz!5e0!3m2!1ses!2ses!4v1480350108362"  frameborder="0" width="100%" height="100%" style="border:0" allowfullscreen class="mapa"></iframe> <!--width="600" height="450"-->

                         
                        </div>
                        <div class=" col-sm-6 col-lg-6 col-md-6">
                            <div class="contacto col-sm-10 col-lg-10 col-md-10">
                                <form action="salida.php" method="POST" class="form-group">
                                    <label for="nombre"> Nombre: </label>
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required="required" class="form-control" />
                                    <br/>
                                    <label for="correo">Email: </label>
                                    <input type="email" name="correo" required="required" placeholder="Email" class="form-control" />
                                    <br>
                                    <label for="telefono">Teléfono: </label>
                                    <input type="tel" name="telefono"  placeholder="Telefono" class="form-control"/>
                                    <br/>
                                    <label for="departamentos">Contactar con: </label>
                                    <select id="departamentos" name="departamentos" class="form-control">
                                        <option value="comercial">Departamento comercial</option>
                                        <option value="marketing">Departamento de marketing</option>
                                        <option value="desarrollo">Departamento de desarrollo</option>
                                    </select>
                                    <br/>
                                    <label for="cuentanos">Cuéntanos, te escuchamos. </label>
                                    <textarea rows=4 cols="41" name="cuentanos">Cuentanos, te escuchamos.</textarea>
                                    <br/>
									<input type="checkbox" name="condiciones" value="1" required="required"> He leído y acepto <a href="condiciones.html" class="condiciones" target="_blank"> los términos y condiciones </a> del aviso legal y las políticas de privacidad.
									<br/>
                                    <input type="submit" value="Enviar" class="btn btn-default btn-lg active boton"/>
                                </form>
                                <hr/>
                                <div class="siguenos">Síguenos en 
                                    <img src="img/facebook.png" width="25px" height="auto"/>  
                                    <img src="img/instagram.png" width="25px" height="auto"/>  
                                    <img src="img/linkedin.png" width="25px" height="auto"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       
        <div class="estiloCopyright">
            <hr>
            Copyright &copy; GrupoDerecha, curso PHP-HTML
        </div>
    </footer>

</body>

</html>