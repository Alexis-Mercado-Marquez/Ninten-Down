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
  var rootRef = firebase.database().ref().child('registros');
  document.getElementById("btn_go1").addEventListener("click", function(event){
      event.preventDefault();
	  localStorage.setItem("LinkND7", $("#rev").val());
	  document.forms["Forma1"].submit();
  });
  document.getElementById("btn_go2").addEventListener("click", function(event){
      event.preventDefault();
	  localStorage.setItem("LinkND7", $("#new").val());
	  document.forms["Forma2"].submit();
  });
  var nombre = localStorage.getItem("nombre_ND2");
  document.getElementById("btn_yo").textContent = nombre;
  carga_inicial();
});
  
function carga_inicial() {
	document.getElementById("que_buscar").value = localStorage.getItem("LinkND7");
	carga_enlaces();
}
  
function carga_enlaces() {
	var db = firebase.database();
	var refer = db.ref("articulos"); //Referencia a la tabla
	$("#rev").empty().append(''); //Vacio el select
	var select1 = document.getElementById("rev");
	var select2 = document.getElementById("new");
	document.getElementById("btn_go1").style.display = "none";
	document.getElementById("btn_go2").style.display = "none";
        refer.orderByChild("Titulo").on("child_added", function(snapshot) {
		    //Se buscan todos los titulos que coincidan con el nombre a buscar
		    if (snapshot.val().Titulo.indexOf($("#que_buscar").val()) >= 0 
			|| $("#que_buscar").val() == "") {
			    var opt = document.createElement('option');
                opt.value = snapshot.val().Titulo;
                opt.innerHTML = snapshot.val().Titulo;
				if (snapshot.val().Tipo == 'r') {
					select1.appendChild(opt); //Se añade un nuevo elemento al select
					document.getElementById("btn_go1").style.display = "block";
				} else {
					select2.appendChild(opt); //Se añade un nuevo elemento al select
					document.getElementById("btn_go2").style.display = "block";
				}
		    }
        });
}