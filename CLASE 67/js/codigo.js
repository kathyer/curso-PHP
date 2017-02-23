$(function()
{
	/*
	Hay que darle los valores que quedan al final de la animación
	Lo convierte en casi transparente, coge la posición donde está y lo mueva 200px y la altura hace un toggle (0 o su tamaño)
	Como último, el tiempo en milisegundos que tarda
	*/
	girarCarta();
});

function animarDiv()
{
	$("#div2").animate(
		{
			marginLeft: "+=200px",
		}, 2000, "swing", function()
			{
				$(this).animate(
				{
					marginLeft: "-=200px",
				}, 2000, "swing", animarDiv)
			}
	);
}

function girarCarta()
{
	$("#div3").animate(
		{
			marginLeft: "+=50px",
			width: 0
		},
		{
			duration: 1000,
			complete: function()
			{
				$(this).css({"background-color" : "red"})
				$(this).animate(
				{
					marginLeft: "-=50px",
					width: "100"
				}, 
					{
						duration: 1000
					}
				)
			}
		}
	);
}