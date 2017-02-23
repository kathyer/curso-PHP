document.getElementById("boton").onclick = sumar;
	
function sumar()
{
	sumando1 = parseInt(document.getElementById("n1").value);
	sumando2 = parseInt(document.getElementById("n2").value);
	if (isNaN(sumando1))
	{
		alert("El sumando 1 no es un número válido");
	}
	else
	{
		if (isNaN(sumando2))
		{
			alert("El sumando 2 no es un número válido");
		}
		else
		{
			document.getElementById("resultado").value = sumando1 + sumando2;
		}
	}
}
