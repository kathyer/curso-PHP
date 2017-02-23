/* Indicar que no se ejeucten las cosas hasta que no haya cargado todo */

$(function()
{

	$("#boton").click(function()
	{
		alert($("#radio:checked").val());
	});

});