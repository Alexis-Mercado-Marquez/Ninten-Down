// Configuración web de firebase
$(document).ready(function(){
  var config = {
    apiKey: "AIzaSyD9rf1Z9t2NT_Zf3_jYbzt9AgPhjgKVdRQ",
    authDomain: "nintendown-fe1aa.firebaseapp.com",
    databaseURL: "https://nintendown-fe1aa.firebaseio.com",
    projectId: "1:1013246637922:web:04c30b1c6d1b9e2c0b9e3b",
    storageBucket: "",
    messagingSenderId: "",
  };
  // Se inicializa la firebase
  firebase.initializeApp(config);
  var db = firebase.database(); //Necesario para que funcione lo de abajo
  //Si se oprime el boton, se registra al usuario
  $( "#add" ).click(function() {
	    var rootRef = firebase.database().ref().child("registros");
        rootRef.child(nombre.value).set({
          nombre:$('#nombre').val(),
          email:$('#email').val(),
          contrasena:$('#contrasena').val(),
          comentarios:$('#comentarios').val(),
       }).then(function() {
			$("#Modal3").modal();//Mensaje de exito
			document.forms["Form_U"].submit();
	   }).catch(function(error) {
			$("#Modal2").modal();//Mensaje de fracaso
	   });
    });
  var usuario = localStorage.getItem("nombre_ND2");
  if (usuario != null && usuario != "") { //Si el usuario inicio sesión
	document.getElementById("salida").style.display = "block";
	document.getElementById("entrada").style.display = "none";
	document.getElementById("btn_buscar").style.display = "block";
	carga_enlaces();
  } else { //Si no lo ha hecho
	document.getElementById("entrada").style.display = "block";
	document.getElementById("salida").style.display = "none";
	document.getElementById("btn_buscar").style.display = "none";
	acceder();
  }
  envia_dato();
  //Se añade un "EventListener" para que al hacer clic a cualquiera de estos botones
  //te envien a la reseña cuyo nombre esta escrito en ellos
  document.getElementById("btn1").addEventListener("click", function(event){
      event.preventDefault(); //De nuevo se guarda el nombre en una var global
	  localStorage.setItem("LinkND7", document.getElementById("btn1").innerText);
	  document.forms["Forma1"].submit();
  });
  document.getElementById("btn2").addEventListener("click", function(event){
      event.preventDefault();
	  localStorage.setItem("LinkND7", document.getElementById("btn2").innerText);
	  document.forms["Forma1"].submit();
  });
  document.getElementById("btn3").addEventListener("click", function(event){
      event.preventDefault();
	  localStorage.setItem("LinkND7", document.getElementById("btn3").innerText);
	  document.forms["Forma1"].submit();
  });
  document.getElementById("btn4").addEventListener("click", function(event){
      event.preventDefault(); //De nuevo se guarda el nombre en una var global
	  localStorage.setItem("LinkND7", document.getElementById("btn4").innerText);
	  document.forms["Forma2"].submit();
  });
  document.getElementById("btn5").addEventListener("click", function(event){
      event.preventDefault();
	  localStorage.setItem("LinkND7", document.getElementById("btn5").innerText);
	  document.forms["Forma2"].submit();
  });
  document.getElementById("btn6").addEventListener("click", function(event){
      event.preventDefault();
	  localStorage.setItem("LinkND7", document.getElementById("btn6").innerText);
	  document.forms["Forma2"].submit();
  });
});
  
function carga_enlaces() { //Obtiene los títulos de las reseñas y los carga en la página
	var db = firebase.database();
    var refer = db.ref("articulos"); //Referencia a la firebase
	var boton_1 = document.getElementById("btn1");
	var boton_2 = document.getElementById("btn2");
	var boton_3 = document.getElementById("btn3");
	var boton_4 = document.getElementById("btn4");
	var boton_5 = document.getElementById("btn5");
	var boton_6 = document.getElementById("btn6");
	let cont_a = 1; //Contador para saber a que botón asignar que reseña
	let cont_b = 1; //Contador para saber a que botón asignar que reseña
	//Se toman y se asignan los últimos tres registros ordenados por fecha a cada botón
    refer.orderByChild("Fecha").on("child_added", function(snapshot) {
		if (snapshot.val().Tipo == 'r') {
			if (cont_a == 1) { boton_1.innerText += snapshot.val().Titulo; }
			else if (cont_a == 2) { boton_2.innerText += snapshot.val().Titulo; }
			else if (cont_a == 3) { boton_3.innerText += snapshot.val().Titulo; }
			cont_a+=1; //Aumenta el contador para el proximo ciclo (los registros se buscan 1 a 1)
		} else if (snapshot.val().Tipo == 'n'){
			if (cont_b == 1) { boton_4.innerText += snapshot.val().Titulo; }
			else if (cont_b == 2) { boton_5.innerText += snapshot.val().Titulo; }
			else if (cont_b == 3) { boton_6.innerText += snapshot.val().Titulo; }
			cont_b+=1; //Aumenta el contador para el proximo ciclo (los registros se buscan 1 a 1)
		}
    });
}

function envia_dato(){
    //Si se oprime el botón, se manda a buscar reseñas con lo que escribio el usuario
    $('#btn_buscar').click(function(e) {
        e.preventDefault();        
    	var dato = $("#que_buscar").val();
    	localStorage.setItem("LinkND7", dato);
	    document.forms["FSearch"].submit();
	}); 
}

function acceder(){	
    $('#btn_ent').click(function(e) {
        e.preventDefault();
    	var nombre_u = $("#user_n").val();
		var contra_u = $("#user_p").val();
		var db = firebase.database();
        var refer = db.ref("registros");
		//Conjunto de elementos HTML
		var entrada = document.getElementById("entrada");
		refer.orderByChild("nombre").on("child_added", function(snapshot) {
        if (snapshot.val().nombre == nombre_u && snapshot.val().contrasena == contra_u) {
			localStorage.setItem("nombre_ND2",nombre_u);
			//document.forms["form"].submit();
			$("#Modal1").modal();//Mensaje de exito
			entrada.style.display = "none";
			document.getElementById("salida").style.display = "block";
			document.getElementById("btn_yo").textContent = nombre_u;
			document.getElementById("btn_buscar").style.display = "block";
			document.getElementById("reg").style.display = "none";
			document.getElementById("registro").style.display = "none";
			carga_enlaces();
		}		
        });
		document.getElementById("user_n").value = "";
		document.getElementById("user_n").textContent = "Error";
		document.getElementById("user_p").value = "";
	}); 
}