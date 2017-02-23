function holaMundo()
{
	var valor = prompt("Introduzca su nombre");
	alert("Hola " + valor + ", bienvenido a Jawascript");
}

function sumaDosNumeros()
{
	var valor1 = prompt("Introduzca un número");
	var valor2 = prompt("Introduzca otro número");
	alert("La multiplicación de los números " + valor1 + " y " + valor2 + " es: " + valor1 * valor2);
}

function nombreYEdad(nombre, edad)
{
	console.log("Soy " + nombre + " y tengo " + edad + " años.");
}

function calcularIVA()
{
	var precio = prompt("Introduzca precio");
	var iva = prompt("Introduzca IVA");
	console.log("El precio del producto es " + precio + " antes de impuestos, y " + parseInt(precio) * (1 + (iva/100)) + " con el iva inclído");	
}

var n1 = 9999999999994623462356536999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
var n2 = 999523452345999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
var n3 = 0.0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000234234;
var n4 = 0.0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000003450234234;
var n5 = 0.9999999999999999999999999999999999999999999999999999999999999999999999999;

var cad1 = "Hola";
var cad2 = "Desbórdame";

/* NaN */

console.log("cad1 - n1:" + cad1 - n1);
console.log("cad1 / cad2:" + cad1 / cad2);

/* Infinity */

console.log("n1 + n2 :" + n1 * n2);
console.log("n1 + n2 :" + n1 * n2);

/* Valor 0 por redondeo */

console.log("n3 / n4 :" + n3 * n4);

/* Resultado distinto al esperado por redondeo */

console.log("3 + n5 :" + (3 + n5));

function pruebaParametros(parametro1, parametro2)
{
	console.log(parametro1);
	console.log(parametro2);
}

calcularIVA();