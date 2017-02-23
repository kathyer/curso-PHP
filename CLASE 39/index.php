<?php

    /* Ejercicio: hacer que una cadena como 27/11/2012 04:35 se vea como "El 27/11/2012 a las 04:35 fué Tuesday" */
    function fechaTextual($fecha)
    {
        $fechaConvertida = strtotime(str_replace("/", "-", $fecha));
        return "El " . date("d/m/Y", $fechaConvertida) . " a las " . date("H:i", $fechaConvertida) . " fué " . date("l", $fechaConvertida);
    }

    function fechaTextual2($fecha)
    {
        $componentes = getdate(strtotime(str_replace("/", "-", $fecha)));
        return "El ". $componentes["mday"] . "/" . $componentes["mon"] . "/" . $componentes["year"] . " a las " . $componentes["hours"] . ":" . $componentes["minutes"] . " fué " . $componentes['weekday'];
    }

    /* Tipo TIMESTAMP. Da el valor de segundos desde la fecha inicio. En este caso es el 1 de Enero de 1970 a las 00:00 GMT+0 */
    $ahora = time();
    $otroMomento = mktime(16, 15, 38, 4, 2, 1993);
    $componentes = getdate($otroMomento);

    $esValida = checkdate(2, 29, 2016);
    if ($esValida)
    {
        echo "Es una fecha válida";
    }
    else
    {
        echo "No es una fecha válida";
    }

    /* Guiones o puntos es formato europeo y con / es formato americano*/
    $unaFecha = strtotime("5-10-2015");
    echo date("d/m/y", $unaFecha) . "<br/>";
    $unaFecha = strtotime("5/10/2015");
    echo date("d/m/y", $unaFecha) . "<br/>";
    $unaFecha = strtotime("2015-10-05");
    echo date("d/m/y", $unaFecha) . "<br/>";

    $timestamp = mktime(0, 0, 0, 10, 5, 2015);
    echo date("d/m/y : N", $timestamp) . "<br/>";

    /* Siguiente Jueves: Next thursday */
    $siguienteJueves = strtotime("+2 weeks", $timestamp);


    echo date("d/m/y : N", $siguienteJueves) . "<br/>";
    echo strftime("%A"); 

    $fecha = date_create("14-02-2015");
    echo "<pre>";
    print_r($fecha);
    echo "</pre>";
    echo date_format($fecha, "d-m-Y");

    $otraFecha = date_create_from_format("d/m/Y", "27/12/1990");
    print_r($otraFecha);

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fechas</title>

    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>

<body>

    <?= $ahora ?><br/>
    <?= Date("d/m/Y", $ahora) ?><br/>
    <?= Date("d/m/Y") ?><br/>
    <?= Date("d/m/Y H:i:s", $otroMomento) ?><br/>
    <pre>
        <?php print_r($componentes) ?>
    </pre>

    Fecha con función: <?= fechaTextual("27/11/2012 04:35") ?> <br/>
    Fecha 2 con función: <?= fechaTextual2("27/11/2012 04:35") ?> <br/>

</body>
</html>
