//Obtenemos el nodo padre en el que vamos a añadir la imagen
document.getElementById("boton").onclick = anadir;
document.getElementById("botonEliminarPrimera").onclick = eliminarPrimera;
document.getElementById("botonEliminarUltima").onclick = eliminarUltima;

function anadir()
{
	/* Primero cogemos el índice del elemento selccionado del select tag (como si fuera un array) */
	var opcionSeleccionada = document.getElementById("miLista").selectedIndex;

	/* Ahora recuperamos todas las opciones posibles del select tag (como si fuera un array de todos los elementos posibles) */
	var opciones = document.getElementById("miLista").options;

	/* Ahora del array de opciones, elegimos la seleccionada y creamos un nuevo nodo */
	var nuevoElemento = crearNodoLista(opciones[opcionSeleccionada].text);

	/* Añadimos ese nuevo nodo a nuestra lista */
	document.getElementById("lista").appendChild(nuevoElemento);

	eliminarElementoSelect(opcionSeleccionada);
}

/* Función que crea un nodo nuevo */
function crearNodoLista(texto)
{
	/* Nuevo nodo de tipo li */
	var nodoLi = document.createElement("li");

	/* Nuevo nodo con el texto que irá dentro de nuestro li */
	var nodoTexto = document.createTextNode(texto);

	/* Añadimos el texto al nodo li creado */
	nodoLi.appendChild(nodoTexto);

	return nodoLi;
}

function crearNodoSelect(texto)
{
	/* Nuevo nodo de tipo option */
	var nodoOption = document.createElement("option");
	nodoOption.value = texto.trim(); /* trim quita espacios */

	/* Nuevo nodo con el texto que irá dentro de nuestro li */
	var nodoTexto = document.createTextNode(texto);

	/* Añadimos el texto al nodo li creado */
	nodoOption.appendChild(nodoTexto);

	return nodoOption;
}

function eliminarPrimera()
{
	var elemento = document.querySelectorAll("#lista li")[0];
	anadirElementoAlSelect(elemento.innerHTML)
	elemento.parentNode.removeChild(elemento);
}

function eliminarPrimeraDelSelect()
{
	var nodoPadre = document.getElementById("miLista");
	var opciones = nodoPadre.options;
	nodoPadre.removeChild(opciones[0]);
}

function eliminarUltima()
{
	var elementos = document.querySelectorAll("#lista li");
	var elemento = elementos[elementos.length-1];
	anadirElementoAlSelect(elementos[elementos.length-1].innerHTML)
	elemento.parentNode.removeChild(elemento);
}

function eliminarUltimaDelSelect()
{
	var nodoPadre = document.getElementById("miLista");
	var opciones = nodoPadre.options;
	nodoPadre.removeChild(opciones[opciones.length-1]);
}

function eliminarElementoSelect(id)
{
	var nodoPadre = document.getElementById("miLista");
	var opciones = nodoPadre.options;
	nodoPadre.removeChild(opciones[id]);
}

function anadirElementoAlSelect(texto)
{
	var nuevoElemento = crearNodoSelect(texto);

	/* Añadimos ese nuevo nodo a nuestro select */
	document.getElementById("miLista").appendChild(nuevoElemento);
}