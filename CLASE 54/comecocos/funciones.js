//* Listeners y elementos */
(function ()
{
var pacman = document.getElementById("pacman");
var pacmanImagen = document.getElementById("pacmanImagen");
var punto = document.getElementById("punto");
window.addEventListener('keydown', function(e) {keyState[e.keyCode] = true;}, true);
window.addEventListener('keyup', function(e) {keyState[e.keyCode] = false;}, true);

/* Para las teclas */
var keyState = {};

/* Declaraciones de teclas de cursor */
const IZQUIERDA = 37;
const ARRIBA = 38;
const DERECHA = 39;
const ABAJO = 40;

/* Atributos de pacman */
const VELOCIDAD = 5; // Velocidad de movimiento
const TAMPACMAN = 50; // Tamaño de pacman (lado del cuadrado)

/* Atributos del punto */
const AUMENTOPUNTOS = 5; // Puntuación a aumentar cuando se come un punto
const TAMPUNTO = 10; // Tamaño del punto
const MAXIMOPUNTOS = 100;
var puntoPosicionX, puntoPosicionY;

/* Tamaño de la pantalla */
var anchoDePantalla = window.innerWidth;
var altoDePantalla = window.innerHeight;

/* Inicializamos la posicion */
var pacmanPosicionX, pacmanPosicionY;

/* Atributos del marcador */
var puntuacion;
var sePuedeJugar;

function callBack()
{
	if (sePuedeJugar)
	{
		if (keyState[ARRIBA])
		{
			cambiarImagen("ARRIBA");
			if (pacmanPosicionY - VELOCIDAD >= 0)
			{
				pacmanPosicionY -= VELOCIDAD;
			}
		}

		if (keyState[ABAJO])
		{
			cambiarImagen("ABAJO");
			if (pacmanPosicionY + VELOCIDAD + TAMPACMAN <= altoDePantalla)
			{	
				pacmanPosicionY += VELOCIDAD;
			}
		}	

		if (keyState[IZQUIERDA])
		{
			cambiarImagen("IZQUIERDA");
			if (pacmanPosicionX - VELOCIDAD >= 0)
			{
				pacmanPosicionX -= VELOCIDAD;
			}
		}

		if (keyState[DERECHA])
		{
			cambiarImagen("DERECHA");
			if (pacmanPosicionX + VELOCIDAD + TAMPACMAN <= anchoDePantalla)
			{
				pacmanPosicionX += VELOCIDAD;
			}
		}

		pacman.style.left = pacmanPosicionX + "px";
		pacman.style.top = pacmanPosicionY + "px";

		if (detectarColision())
		{
			aumentarPuntuacion();
			colocarPuntoNuevaPosicion();
		}

		setTimeout(callBack, 10);
	}
}

function inicializar()
{
	/* Pacman */
	pacmanPosicionX = 200;
	pacmanPosicionY = 100;

	pacman.style.top = pacmanPosicionY + "px";
	pacman.style.left = pacmanPosicionX + "px";
	pacman.style.width = TAMPACMAN + "px";
	pacman.style.height = TAMPACMAN + "px";

	puntuacion = 0;
	sePuedeJugar = true;
	colocarPuntoNuevaPosicion();

}

function detectarColision()
{
	if ((puntoPosicionX + TAMPUNTO < pacmanPosicionX) || (puntoPosicionX > pacmanPosicionX + TAMPACMAN))
	{
		return false;
	}
	else
	{
		if ((puntoPosicionY + TAMPUNTO < pacmanPosicionY) || (puntoPosicionY > pacmanPosicionY + TAMPACMAN))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

// if ((puntoLeft < pacmanLeft + pacmansize) && (puntoleft + puntosize > pacmanleft) && (puntotop < pacmantop + pacmansize) && (puntotop + puntosize > pacmantop))

function colocarPuntoNuevaPosicion()
{
	do
	{
		puntoPosicionX = parseInt(Math.random() * (anchoDePantalla - TAMPUNTO));
		puntoPosicionY = parseInt(Math.random() * (altoDePantalla - TAMPUNTO));
	} while (detectarColision() == true);

	punto.style.top = puntoPosicionY + "px";
	punto.style.left = puntoPosicionX + "px";
}

function aumentarPuntuacion()
{
	puntuacion += AUMENTOPUNTOS;
	document.getElementById("marcador").innerHTML = puntuacion;

	if (puntuacion == MAXIMOPUNTOS)
	{
		alert("Enhorabuena, has compeltado la partida");
		sePuedeJugar = false;
	}
}

function cambiarImagen(orientacion)
{
	pacmanImagen.src="img/pacman" + orientacion + ".png";
}

inicializar();
callBack();})();