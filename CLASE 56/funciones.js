function Animal(nombre)
{
	this.nombre = nombre;
}

Animal.prototype.saludar = function()
{
	alert("Soy un animal y me llamo " + this.nombre);
}

function Gato(nombre)
{
	Animal.call(this, nombre); // Esto llama al constructor de la clase padre
}

Gato.prototype = new Animal();
Gato.prototype.constructor = Gato;

Gato.prototype.maullar = function()
{
	alert("Miauuu");
}

var gatito = new Gato("pirrakas");
gatito.saludar();
gatito.maullar();