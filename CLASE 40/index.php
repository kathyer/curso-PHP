<?php

    function division($dividendo, $divisor)
    {
        /* 
        /* 
        Comprobamos si el divisor es 0. De ser así, no es posible dividir por 0, por lo cual lanzamos la excepción
        La excepción debe lanzarse con el trhow new Exception y el contenido del mensaje.
        */
        if ($divisor == 0)
        {
            throw new Exception("No puede dividir entre cero");
        }
        if ($divisor == 0)
        {
            throw new Exception("No puede dividir entre cero");
        }
        /* Si llega aquí entonces es que no hay errores, por lo cual realizamos la operación */
        return $dividendo / $divisor;
    }

    /*
    Siempre que una función tenga lanzamiento de excepciones hay que llamarla mediante un try
    try ejecuta la función y en caso de que tenga excepciones, es catch quien las captura y ejecuta el código que hemos escrito en el
    */
    try
    {

        echo division(10, 0);
    }
    catch (Exception $e)
    {
        echo "Ha ocurrido un error: " . $e->getMessage();
    }
    /* Lo que está dentro de estas operaciones se va a ejecutar siempre, tanto si funciona bien como si ocurren errores */
    finally
    {
        echo "Esto va a aparecer siempre";
    }

    /* Cuando hay una excepción de cualquier tipo, llama a la función establecida ahí*/
    set_error_handler("miManejadorDeErrores");

    /* Función que muestar un mensaje genérico sobre el tratamiento de excepciones */
    function miManejadorDeErrores($codigo, $error, $archivo=NULL, $linea=NULL)
    {
        throw new Exception("$error encontrado en $archivo, linea $linea")´;
    }

    /* para probar el tratamiento de excepciones */
    try
    {
        $fichero = fopen("noexiste.txt", "r");
    }
    catch(Exception $e)
    {
        echo "Error capturado: " . $e->getMessage();
    }    

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Excepciones</title>

    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>

<body>

</body>
</html>
