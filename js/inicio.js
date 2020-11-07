$(document).ready(function(){
	click_ver_alerta();
});

/*funcion que muestra una alerta*/
function click_ver_alerta(){
	$('#ver_alerta').click(function(e){
		e.preventDefault();
		alert("ACTIVASTE UNA FUNCION JS");
	});	
}

$('.carousel').carousel({
  interval: 2400
})