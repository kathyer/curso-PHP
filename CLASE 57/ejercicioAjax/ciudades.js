document.getElementById("provinciaSelect").addEventListener("change", cargarCiudades);

function cargarCiudades()
{
	var ciudadId = this.value;

	/* Crea un objeto XMLHttpRequest */
	var xhttp = new XMLHttpRequest();

	/* Creamos un disparador para que cuando cambie la propiedad onready cambie */
	xhttp.onreadystatechange = function()
	{
		/* Comprueba si está preparado y si lo está cambia el contenido */
		if (this.readyState == 4 && this.status == 200)
		{
			var ciudadesJSON = JSON.parse(this.responseText);
			var opciones = "";

			/* como el foreach */
			for (ciudad in ciudadesJSON)
			{
				opciones += "<option value='" + ciudadesJSON[ciudad].id + "'>" + ciudadesJSON[ciudad].nombre + "</option>\n";
			}

			document.getElementById("ciudadSelect").innerHTML = opciones;
		}
	};

	xhttp.open("GET", "ciudades.php?id=" + ciudadId, true);
	xhttp.send();
}