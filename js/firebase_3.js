$(document).ready(function(){
var config = {
    apiKey: "AIzaSyD9rf1Z9t2NT_Zf3_jYbzt9AgPhjgKVdRQ",
    authDomain: "nintendown-fe1aa.firebaseapp.com",
    databaseURL: "https://nintendown-fe1aa.firebaseio.com",
    projectId: "nintendown-fe1aa",
    storageBucket: "nintendown-fe1aa.appspot.com",
    messagingSenderId: "1013246637922",
    appId: "1:1013246637922:web:4c7e9128c7c238740b9e3b",
    measurementId: "G-59TFB9S9SK"
}; // Initializa la firebase
firebase.initializeApp(config);
var el_nombre = localStorage.getItem("nombre_ND2");
document.getElementById("btn_yo").textContent = el_nombre;
obt_articulo();
obt_comentarios();
add_comentario();
});

var nombre = localStorage.getItem("LinkND7");//Nombre del artículo a mostrar

function obt_articulo() {
    var db = firebase.database();
    var refer = db.ref("articulos");
    refer.orderByChild("Titulo").equalTo(nombre).on("child_added", function(snapshot) {
        //console.log(snapshot.val().Titulo);
		var Titulo = document.getElementById("title");
		if (snapshot.val().Tipo=="r") {
			Titulo.innerText = "Reseña : "+snapshot.val().Titulo;
		} else {
			Titulo.innerText = "Noticia: "+snapshot.val().Titulo;
		}
		var Autor = document.getElementById("author");
		Autor.innerText = snapshot.val().Autor+" el ";
		var Fecha = document.getElementById("date");
		Fecha.innerText = snapshot.val().Fecha;
		var Imagen = document.getElementById("img_res");
		var Refer = '<img src="' + snapshot.val().ImagenUrl+'"/>';
		Imagen.innerHTML = Refer;
		var Texto = document.getElementById("text");
		Texto.innerText = snapshot.val().Contenido;
		var Enlace = document.getElementById("link");
		Enlace.href = snapshot.val().Enlace;
		document.getElementById("btn_com").style.display = "block";
    });
}

function obt_comentarios() {
    var db = firebase.database();
    var refer = db.ref("comentarios");
	var mi_ref = ''; //Guarda el código html para agregarlo al contaniner
	var lista_com = document.getElementById("lista_com"); //Guarda los comentarios
    refer.orderByChild("Articulo").on("child_added", function(snapshot) {
        if (snapshot.val().Articulo == nombre) {
			mi_ref = '<div class="comentario">'
			+'<div class="row">'
			+'<div class="col-md-1 col-sm-10">'
			+'<br><center><img src="https://firebasestorage.googleapis.com/v0/b/nintendown-fe1aa.appspot.com/o/Imagenes%2FUser.png?alt=media&token=4b558b76-5959-44a2-92f3-2fec9ca198e9"'
			+'height="56" width="56" alt="none"><center><br>'
			+'</div>'
			+'<div class="col-md-10 col-sm-10">'
			+'<h4><label id="com_aut">'+snapshot.val().Autor+' el </label>'
			+'<label id="com_date">'+snapshot.val().Fecha+'</label></h4>'
			+'<label id="com">'+snapshot.val().Contenido+'</label>'
			+'</div></div>'
		    +'</div><br>';
			lista_com.innerHTML += mi_ref;
		}		
    });
}


function add_comentario(){
    $("#btn_com").click(function(e){
		e.preventDefault();
		var hoy = new Date(); //Se obtiene la fecha de subida
        var fecha = hoy.getDate()+"/"+(hoy.getMonth()+1)+"/"+hoy.getFullYear();
		var rootRef = firebase.database().ref().child("comentarios");
		var el_autor = localStorage.getItem("nombre_ND2");
		rootRef.push({	
			Articulo:document.getElementById("title").textContent.substr(9),
			Autor:el_autor,
			Fecha:fecha,			
			Contenido:$('#comment').val()
		});
		document.getElementById("comment").value="";
		location.reload();
	});
  }