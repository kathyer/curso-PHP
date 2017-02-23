function dibujar()
{
	var ctx = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");

	ctx.fillStyle = "rgb(200, 0, 0)";
	ctx.fillRect(10, 10, 50, 50);
	ctx.fillStyle = "rgba(0, 200, 0, 0.5)";
	ctx.fillRect(30, 30, 50, 50);

	/* Para el color de la línea */
	ctx.strokeStyle = "#0f0";
	ctx.lineWidth = 2;
	/*
	Para pintar una línea
	1. Colocamos la pluca en el punto inicial
	*/
	ctx.moveTo(30, 50);
	/* Establecemos el punto final */
	ctx.lineTo(100, 200);
	/* Indicamos mas coordenadas para otra línea */
	ctx.lineTo(150, 40);
	/* Le indicamos que la pinta */
	ctx.stroke();
	/* Si por el lado contraro, le indicamos ctx.fill() lo que hace es rellenarlo de color */
	ctx.fill();

	/*
	Dibujar un arco
	1. Coordenada X
	2. Coordenada Y
	3. Radio del círculo
	4. Ángulo inicila
	5. Angulo final
	6. Opcional. Si se añade true, pinta en sentido contrario a las agujas del reloj.
	*/

	ctx.moveTo(100, 100);
	//ctx.arc(100, 100, 50, 0, Math.PI);
	ctx.stroke();

	//ctx.arc(100, 100, 50, Math.PI / 2 , 3 * Math.PI);
	ctx.stroke();

	/* Circunferencia entera */
	ctx.arc(100, 100, 50, 0, 2 * Math.PI);
	ctx.stroke();

	/* Texto */
	ctx.strokeStyle = "rgb(0, 0, 200)";
	ctx.font = "Italic Bold 34pt Arial, sans-serif";
	ctx.fillText("Hola", 50, 100);
	ctx.strokeText("Adios", 150, 100);

	ctx.fillStyle = "rgb(230, 0,230)";
	ctx.textAlign = "center";
	ctx.textBaseline = "alphabetic"; /* top, middle, alphabetic, bottom */
	ctx.fillText("Nuevo textop", 200, 150);

	/* Sombras */
	ctx.shadowColor ="#000";
	ctx.shadowOffsetX = 4;
	ctx.shaddowOffsetY = 4;
	ctx.shadowBlur = 7;
	ctx.fillText("sombra", 250, 200);

}

dibujar();