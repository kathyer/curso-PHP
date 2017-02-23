/* Indicar que no se ejeucten las cosas hasta que no haya cargado todo */

$(function()
{

	$("#miParrafo").css({"font-weight" : "bold"});
	$(".parrafo").css({"color" : "#f00"});
	$("p").css({"font-size": "30px"});

	$(".boton").click(function()
	{
		$(".nombre").val("Hola " + $("#nombre").val());
		$("#nombre").val("Hola " + $("#nombre").val());
	});

	/* Si se pone un valor entre paréntesis, se pone el valor dentro de los paréntesis y si no se pone ningún valor, lo recupera */

});