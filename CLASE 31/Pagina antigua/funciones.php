<?php

	function hacerListado($consulta)
	{
		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "bdalumnos"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		$listado = []; /* Creamos un array vacío, que será lo que nos devuelva al final de la función */

		if ($resultado)
		{
			while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
			{
				$listado[] = $fila;
			}
		}

		mysqli_free_result($resultado); /* Libera la memoria ocupada por la consulta */
		mysqli_close($enlace); /* Cerrar la conexión */

		return $listado;
	}

	function insertarElemento($consulta)
	{
		$servidor = "localhost"; /* Servidor donde se encuentra la base de datos */
		$usuario = "root"; /* Usuario adminsitrador de la base de datos por defecto de XAMP */
		$password = ""; /* Contraseña por defecto de root */
		$baseDeDatos = "bdalumnos"; /* Nombre de la base de datos */

		/* Abrir una conexión con la base de datos */
		$enlace = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

		if(mysqli_connect_errno())
		{
			die("Desconexión. No se pudo conectar " . mysqli_connect_errno()); /* Función para detener la ejecución en caso de error */
		}

		$query = "SET NAMES 'utf8'";
		mysqli_query($enlace, $query);

		$resultado = mysqli_query($enlace, $consulta); /* Devuelve los datos de la base de datos */

		mysqli_close($enlace); /* Cerrar la conexión */

		return $resultado;
	}

	/* Función que crea una consulta para la búsqueda de alumnos pero ordeandos por un criterio */
	function crearConsulta($parametro, $orden, $pagina)
	{
		/*
		parámetro: Es el elemento por el cual se van a ordenar (por nombre, por apellidos, edad, etc)
		orden: Es el orden por el cual se van a ordenar. Los valores son ASC (ascendente) y DESC (descendente)
		*/
		return "SELECT * FROM alumnos ORDER BY $parametro LIMIT $pagina*5 5;";
	}

	/* Función para establecer el orden en el cual se van a mostrar los datos. Esta función es llamada al generar el link al pulsar
	en la tabla. Si se vuelve a hacer click en el parámetro cambia el orden y si se pulsa un parámetro nuevo lo ordena
	ascendentemente. El parámetro por el cual se le van a ordenar lo paso y compruebo si es el mismo. Si es el mismo que el actual
	lo que hago es invertir el orden, y si es distinto (pulsar un nuevo parámetro ordenador, por ejemplo si está ordenando por
	nombre y luego se quiere ordenar por edad) lo convierte en orden ascendente */
	function getOrden($discriminador)
	{
		/* Si no hay ningún parámetro pasado, el orden que provocará es ascendente */
		if (empty($_GET))
		{
			return "ASC";
		}
		else
		{	/* Compruebo si el nombre es igual. Si es igual, invierto el orden*/
			if ($_GET["parametro"] == $discriminador)
			{
				if ($_GET["orden"] == "ASC")
					return "DESC";
				else
					return "ASC";
			} /* Si no es igual, convierto el orden en ascendente */
			else
				return "ASC";
		}
	}

	/* Valida los datos que se le han pasado por parámetro, que los ordenadores sean correctos y que el orden sea correcto */
	function validarDatos()
	{
		if (isset($_GET["parametro"]))
		{
			$valores = ["nombre", "apellidos", "edad", "curso", "altura", "sexo"];
			if (!in_array($_GET["parametro"], $valores))
				return false;
		}
		else
		{
			return false;
		}
		if (isset($_GET["orden"]))
		{
			$valoresOrden = ["ASC", "DESC"];
			if (!in_array($_GET["orden"], $valoresOrden))
				return false;
		}
		else
		{
			return false;
		}
		return true;
	}

	function validarPagina(){
		if (isset($_GET["pagina"]))
		{
			if ($_GET["pagina"] < 0 || ($_GET["pagina"] > getUltimoBoton()))
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	function getPrimerBoton()
	{
		return 0;
	}

	function getUltimoBoton()
	{
		$alumnosTotales = hacerListado("SELECT COUNT(*) FROM alumnos;")[0];

		return ($alumnosTotales["COUNT(*)"] - $alumnosTotales["COUNT(*)"] % 5) / 5 ;
	}

	function getAnteriorBoton()
	{
		if ($_GET["pagina"] > 1)
			return ($_GET["pagina"] - 1);
		else
			return 0;
	}

	function getSiguienteBoton()
	{
		$ultimo = getUltimoBoton();
		if (($_GET["pagina"] + 1) >= $ultimo)
		{
			return $ultimo;
		}
		return ($_GET["pagina"] + 1);

	}

	function urlActual()
	{
		if (!validarDatos())
			return "";
		return "?parametro=" . $_GET["parametro"] . "&orden=" . $_GET["orden"];
	}

	function validarNuevoAlumno()
	{
		if (empty($_POST["nombre"]))
		{
			echo "nombre no válido";
			return "Debe introducir un nombre";
		}

		if (empty($_POST["apellidos"]))
		{
			echo "apellidos no válidos";
			return false;
		}

		if (empty($_POST["edad"]) || ($_POST["edad"] < 0) || !is_numeric($_POST["edad"]))
		{
			echo "edad no válida";
			return false;
		}

		if (!empty($_POST["curso"]))
		{
			$valores = ["Primero", "Segundo", "Tercero", "Cuarto", "Quinto", "Sexto", "Séptimo"];
			if (!in_array($_POST["curso"], $valores))
			{
				echo "curso no válido";
				return false;
			}
		}
		else
		{
			echo "curso no válidoooo";
			return false;
		}		

		if (empty($_POST["altura"]) || ($_POST["altura"] < 0) || !is_numeric($_POST["altura"]))
		{
			echo "altura no válida";
			return false;
		}

		if (empty($_POST["sexo"]))
		{
			echo "sexo no especificado";
			return false;
		}
		else
		{
			if ($_POST["sexo"] == "H")
			return true;
			else
			{
				if ($_POST["sexo"] == "M")
				return true;	
			}
		}

		return false;		
	}

?>