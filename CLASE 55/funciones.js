function actualizarReloj()
{
	let fecha = new Date();
	document.getElementById("reloj").innerHTML = fecha.getHours() + ":" + fecha.getMinutes() + ":" + fecha.getSeconds();	
}

setInterval(actualizarReloj, 1000);
