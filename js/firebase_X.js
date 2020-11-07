// Configuración web de firebase
$(document).ready(function(){
  mi_cuenta();
  salir();
});

function mi_cuenta(){	
    $('#btn_yo').click(function(e) {
		e.preventDefault();
		document.forms["formX"].submit();
	}); 
}

function salir(){	
    $('#btn_sal').click(function(e) {
        e.preventDefault();        
    	//Datos por defecto
		localStorage.setItem("nombre_ND2","");
		document.forms["form"].submit();
	}); 
}