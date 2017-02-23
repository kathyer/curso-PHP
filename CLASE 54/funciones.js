document.getElementById("boton").addEventListener("click", comprobarPalindromo);

function replaceAll(str, find, replace)
{
	return str.replace(new RegExp(find, 'g'), replace);
}

function esPalindromo(cadena)
{
	cadena = replaceAll(cadena, " ", ""); // Quitar espacios
	cadena = cadena.toUpperCase(cadena); // Convertida en mayúsculas

	/* Ahora comproabmos si es palíndromo */
	var tam = cadena.length / 2;
	for (var i = 0; i < tam; i++)
	{
		//console.log("i vale " + i + ". cadena[" + i + "] = " + cadena[i] + " cadena[" + cadena.length + "-" + (i  - 1)+ "] vale " + cadena[cadena.length - i - 1]);
		if (cadena[i] != cadena[cadena.length - i - 1])
			return false;
	}
	return true;
}

function comprobarPalindromo()
{
	var cadena = document.getElementById("cadena").value;
	console.info("Cadena: " + cadena);
	if (esPalindromo(cadena))
		console.log("Resultado: Es palíndromo");
	else
		console.log("Resultado: No es palíndromo");
}