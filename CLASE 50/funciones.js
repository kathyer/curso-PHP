document.getElementById("boton").addEventListener("click", enviar);

function enviar()
{
	console.info("Formulario enviado");
	console.log("Texto 1: " + document.getElementById("texto1").value);
	console.log("Texto 2: " + document.getElementById("texto2").value);
	console.log("Texto 3: " + document.getElementById("texto3").value);
	this.removeEventListener("click", enviar);
	this.addEventListener("click", avisoDeEnviado);
}

function avisoDeEnviado()
{
	alert("El formulario ya se ha enviado, no insitas");
}