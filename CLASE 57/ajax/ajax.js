document.getElementById("cargarBtn").addEventListener("click", cargaDocumento);

function cargaDocumento()
{
	/* Crea un objeto XMLHttpRequest */
	var xhttp = new XMLHttpRequest();

	/* Creamos un disparador para que cuando cambie la propiedad onready cambie */
	xhttp.onreadystatechange = function()
	{
		/* Comprueba si está preparado y si lo está cambia el contenido */
		if (this.readyState == 4 && this.status == 200)
		{
			document.getElementById("demo").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "archivo.txt", true);
	xhttp.send();
}	