document.getElementById("boton").onclick = listar;

function listar()
{
	var filas = document.getElementsByTagName("tr");
	for (var i = 1; i < filas.length; i += 2)
	{
		filas[i].style.backgroundColor = "#ccc";
	}
}