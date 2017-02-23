/* Cargamos el área de dibujo*/
var ctx = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

document.getElementById("canvas").addEventListener("mousedown", hagoClick);
document.getElementById("canvas").addEventListener("mouseup", levantoClick);
document.getElementById("botonLimpiar").addEventListener("click", limpiar);

/* Varibles para guardar el estado anterior de los dibujos */
var xAnterior, yAnterior;

function cargarDatosTipoDibujo()
{
	if (document.getElementById("tipoRecta").checked==true)
		return "recta";
	if (document.getElementById("tipoCuadrado").checked==true)
		return "cuadrado";
	return "texto";
}

function cargarDatosDibujo()
{
	ctx.strokeStyle = document.getElementById("colorLinea").value;
	ctx.fillStyle = document.getElementById("colorRelleno").value;
	ctx.lineWidth = document.getElementById("anchoBorde").value;
	tipo = cargarDatosTipoDibujo();
}

function debug()
{
	alert("linea: " + colorLinea + "\nColorRelleno: " + colorRelleno + "\nanchoBorde: " + anchoBorde + "\ntipo: " + tipo);
}

function dibujarLinea(x_ini, y_ini, x_fin, y_fin)
{
	ctx.beginPath();
	ctx.moveTo(x_ini, y_ini);
	ctx.lineTo(x_fin, y_fin);
	ctx.stroke();
}

function dibujarCuadrado(x_ini, y_ini, x_fin, y_fin)
{
	ctx.beginPath();
	ctx.rect(x_ini,y_ini,x_fin-x_ini,y_fin-y_ini);
	ctx.stroke();
	ctx.fill();
}

function dibujarTexto(x, y)
{
	ctx.fillText(document.getElementById("texto").value, x, y);
}

function limpiar()
{
	ctx.clearRect(0, 0, 640, 480);
}

function hagoClick(event)
{
	xAnterior = event.clientX;
	yAnterior = event.clientY;
}

function levantoClick(event)
{
	var xFinal = event.clientX;
	var yFinal = event.clientY;
	cargarDatosDibujo()
	switch(tipo)
	{
		case "recta": dibujarLinea(xAnterior, yAnterior, xFinal, yFinal);break;
		case "cuadrado": dibujarCuadrado(xAnterior, yAnterior, xFinal, yFinal);break;
		case "texto": dibujarTexto(xFinal, yFinal);break;
	}
}