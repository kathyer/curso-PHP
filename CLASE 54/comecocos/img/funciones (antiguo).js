/* Listeners y elementos */
document.addEventListener("keydown", moverPacman)
document.addEventListener("keyup", pararMovimiento)
var pacman = document.getElementById("pacman");
var punto = document.getElementById("punto");

/* Declaraciones de teclas de cursor */
const IZQUIERDA = 37;
const ARRIBA = 38;
const DERECHA = 39;
const ABAJO = 40;

/* Atributos de pacman */
const VELOCIDAD = 10; // Velocidad de movimiento
const TAMPACMAN = 50; // Tamaño de pacman (lado del cuadrado)

/* Atributos del punto */
const AUMENTOPUNTOS = 5; // Puntuación a aumentar cuando se come un punto
const ANCHOPUNTO = 10; // Tamaño del punto
var puntoPosicionX, puntoPosicionY;

/* Tamaño de la pantalla */
var anchoDePantalla = window.innerWidth;
var altoDePantalla = window.innerHeight;

/* Inicializamos la posicion */
var pacmanPosicionX, pacmanPosicionY;

/* Atributos del marcador */
var puntuacion;

var moviendose = false;

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
	colocarPuntoNuevaPosicion();

}

function moverPacman(evento)
{
	var codigoTecla = evento.which;

	switch(codigoTecla)
	{
		case ARRIBA: moverArriba(); break;
		case ABAJO: moverAbajo(); break;
		case IZQUIERDA: moverIzquierda(); break;
		case DERECHA: moverDerecha(); break;
	}

	if (detectarColision())
	{
		aumentarPuntuacion();
		colocarPuntoNuevaPosicion();
	}
}

function pararMovimiento()
{
	moviendose = true;
}

function moverDerecha()
{
	if (pacmanPosicionX + VELOCIDAD + TAMPACMAN <= anchoDePantalla)
	{
		pacmanPosicionX += VELOCIDAD;
		pacman.style.left = pacmanPosicionX + "px";
	}
}

function moverIzquierda()
{
	if (pacmanPosicionX - VELOCIDAD >= 0)
	{
		pacmanPosicionX -= VELOCIDAD;
		pacman.style.left = pacmanPosicionX + "px";	
	}
}

function moverArriba()
{
	if (pacmanPosicionY - VELOCIDAD >= 0)
	{
		pacmanPosicionY -= VELOCIDAD;
		pacman.style.top = pacmanPosicionY + "px";
	}
}

function moverAbajo()
{
	if (pacmanPosicionY + VELOCIDAD + TAMPACMAN <= altoDePantalla)
	{	
		pacmanPosicionY += VELOCIDAD;
		pacman.style.top = pacmanPosicionY + "px";
	}
}

function detectarColision()
{
	if ((puntoPosicionX + ANCHOPUNTO < pacmanPosicionX) || (puntoPosicionX > pacmanPosicionX + TAMPACMAN))
	{
		return false;
	}
	else
	{
		if ((puntoPosicionY + ANCHOPUNTO < pacmanPosicionY) || (puntoPosicionY > pacmanPosicionY + TAMPACMAN))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

function colocarPuntoNuevaPosicion()
{
	puntoPosicionX = parseInt(Math.random() * anchoDePantalla);
	puntoPosicionY = parseInt(Math.random() * altoDePantalla);

	punto.style.top = puntoPosicionY + "px";
	punto.style.left = puntoPosicionX + "px";
}

function aumentarPuntuacion()
{
	puntuacion += AUMENTOPUNTOS;
	document.getElementById("marcador").innerHTML = puntuacion;
}

inicializar();