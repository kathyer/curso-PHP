/* Variables globales */

var saldo = 500;

/* Funciones */

function esDivisible(dividendo, divisor)
{
	mensaje = (dividendo%divisor == 0) ? "Es divisible" : "No es divisible";
	console.info(mensaje);
}

function comprar(precio)
{
	if (saldo < precio)
	{
		alert("No tienes suficiente dinero");
		console.warn("No hay suficiente dinero. Saldo disponible: " + saldo + ". Precio: " + precio + " Euros.");
	}
	else
	{
		saldo -= precio;
		console.info("Producto comprado a " + precio + " Euros. Saldo disponible: " + saldo + " Euros.");
	}
}

	function diaDeLaSemana(dia)
	{
		console.log("Dia: " + dia);
		switch(dia)
		{
		case 1:
			console.info("Es Lunes");
		break;
		case 2:
			console.info("Es Martes");
		break;
		case 3:
			console.info("Es Miércoles");
		break;
		case 4:
			console.info("Es Jueves");
		break;
		case 5:
			console.info("Es Viernes");
		break;
		case 6:
		case 7:
			console.info("Es fin de semana");
		break;
	    default:
	        console.warn("Día no válido");
		}
	}

function numeroATexto(numero)
{
	switch(numero)
	{
		case 1: return "Uno"; break;
		case 2: return "Dos"; break;
		case 3: return "Tres"; break;
		case 4: return "Cuatro"; break;
		case 5: return "Cinco"; break;
		case 6: return "Seis"; break;
		case 7: return "Siete"; break;
		default: return "Error"; break;
	}
}

function caraOpuestaDado()
{
	var numero = prompt("Introduce una cara del dado")
	caraOpuesta = 7 - numero;
	alert("Cara opuesta: " + numeroATexto(caraOpuesta));
}

function factorial(numero)
{
	if (numero >= 0)
	{
		var resultado = 1;
		for (var i = 1; i <= numero; i++)
		{
			resultado *= i
		}
		console.info("Factorial de " + numero + ": " + resultado);
	}
	else
	{
		console.warn("Número incorrecto: " + numero);
	}
}

function tablaDeMultiplicar(numero)
{
	for (var i = 0; i <= 10; i++)
	{
		console.log(numero + " x " + i + " = " + numero * i);
	}
}

function esPrimo(numero)
{
	var limite = parseInt(numero/2);
	var divisores = 0;
	for (var i = 2; i <= limite; i++)
	{
		if (numero%i == 0)
		{
			divisores++;
			console.log(numero + " es divisible por " + i);
		}
	}

	if (divisores == 0)
	{
		console.info(numero + " es primo");
	}

}

/* Ejercicio while */

function asteriscos(numero)
{
	var i = 0;
	var cadena = "";

	while(i<numero)
	{
		cadena += "*";
		i++;
	}

	console.log(cadena);
}

function imparesEntreDosNumeros(numero1, numero2)
{
	var iterador = numero1 + 1;
	console.info("Comienzo: " + numero1);
	for (iterador; iterador < numero2; iterador++)
	{
		if (iterador % 2 != 0)
		{
			console.log(iterador);
		}
	}
	console.info("Final: " + numero2);
}

function calcularMedia()
{
	var numeroIntroducido = parseInt(prompt("Introduzca un número (0 para salir)"));
	var numeros = 1;
	var numerosIntroducidos = numeroIntroducido;

	while (numeroIntroducido != 0)
	{
		alert("La media de los valores introducidos es " + (numerosIntroducidos / numeros));
		numeroIntroducido = parseInt(prompt("Introduzca un número (0 para salir)"));
		numerosIntroducidos += numeroIntroducido;
		numeros++;
	}
}

function numeroMayor()
{
	nMayor = Number.MIN_VALUE;
	var numeroLeido;
	do
	{
		numeroLeido = parseInt(prompt("Introduzca un número. O para salir"));
		if (numeroLeido > nMayor)
		{
			nMayor = numeroLeido;
		}

	}while (numeroLeido != 0);

	alert("El número mas grande introducido es " + nMayor);
}

function sumaMil()
{
	var numero = parseInt(Math.random()*100);
	var suma = numero;

	while (suma <= 1000)
	{
		console.log("Número: " + numero + ". Total = " + suma);
		numero = parseInt(Math.random()*100);
		suma += numero;
	}
	console.info("Resultado final - Número: " + numero + ". Total = " + suma);
}

sumaMil();