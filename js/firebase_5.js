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
  carga_enlaces();
  carga_resena();
  carga_noticia();
});

function carga_enlaces() { //Obtiene los títulos de las reseñas y los carga en la página
	var db = firebase.database();
    var refer = db.ref("articulos"); //Referencia a la firebase
	var my_Ref = ''; //Guarda la cadena HTML
	var nombre = localStorage.getItem("nombre_ND2");
    document.getElementById("btn_yo").textContent = nombre;
	var div_1 = document.getElementById("sec_rev");
	var div_2 = document.getElementById("sec_new");
	//Se toman y se asignan los registros ordenados por fecha a cada botón
    refer.orderByChild("Autor").on("child_added", function(snapshot) {
		if (snapshot.val().Autor == nombre) {
			my_Ref = '<label class="form-control">'+snapshot.val().Titulo+'</label><br>';
			if (snapshot.val().Tipo == 'r') {
				div_1.innerHTML+=my_Ref;
			} else if (snapshot.val().Tipo == 'n') {
				div_2.innerHTML+=my_Ref;
			}
		}
    });
}

function carga_resena(){
    $("#add_rev").click(function(e){
		e.preventDefault();
		localStorage.setItem("Tipo_Art",'r');
		document.forms["form_rev"].submit();
	});
}

function carga_noticia(){
    $("#add_new").click(function(e){
		e.preventDefault();
		localStorage.setItem("Tipo_Art",'n');
		document.forms["form_new"].submit();
	});
}