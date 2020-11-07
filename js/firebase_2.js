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
if (tipo == 'n') {
	document.getElementById("crear").innerText="Crea tu noticia";
	document.getElementById("add_art").textContent="Crear noticia";
}
var nombre = localStorage.getItem("nombre_ND2");
document.getElementById("btn_yo").textContent = nombre;
add_articulo();
});

var tipo = localStorage.getItem("Tipo_Art");

$(document).ready(function(){
    $('input[type="image"]').change(function(e){
        var fileName = e.target.files[0].name;
        alert('El archivo "' + fileName +  '" se ha seleccionado.');
    });
});

function add_articulo(){
    $("#add_art").click(function(e){
		e.preventDefault();
		var hoy = new Date(); //Se obtiene la fecha de subida
        var fecha = hoy.getDate()+"/"+(hoy.getMonth()+1)+"/"+hoy.getFullYear();
		var fileU = document.getElementById("image");
        var storageRef = firebase.storage().ref();
		var fileUpload = fileU.files[0];
        var uploadTask = storageRef.child('Imagenes/'+fileUpload.name).put(fileUpload);
        uploadTask.on('state_changed', function(snapshot){
        // Obtiene el progreso de la tarea
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log('Carga completa en un ' + progress + '%');
        switch (snapshot.state) {
            case firebase.storage.TaskState.PAUSED: // si esta pausada
                console.log('Carga en pausa');
                break;
            case firebase.storage.TaskState.RUNNING: // si esta "corriendo"
                console.log('Carga corriendo');
                break;
            }
        }, function(error) {
            // Maneja los errores
        }, function() {
            // Maneja subidas exitosas
            var downloadURL = uploadTask.snapshot.downloadURL;
            firebase.database().ref('Posts/').push().key;
            var updates ={};
            var postData ={
                url:downloadURL,		
                Titulo:$('#titulo').val(),
                Contenido:$('#contenido').val(),
                Enlace:$('#enlace').val(),
            };
			insertar_registro(downloadURL);
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                console.log('Archivo disponible en ', downloadURL);
            });
        });
		
		function insertar_registro(downloadURL) {
			var el_autor = localStorage.getItem("nombre_ND2");
			var rootRef = firebase.database().ref().child('articulos');
		    rootRef.child(titulo.value).set({		
                Autor:el_autor,
                Tipo:tipo,
                Fecha:fecha,			
                Titulo:$('#titulo').val(),
                ImagenUrl:downloadURL,
                Contenido:$('#contenido').val(),
                Enlace:$('#enlace').val(),
			    Me_gusta:0
            }).then(function() {
				$("#Modal1").modal();//Mensaje de exito
				document.forms["form"].submit();
			}).catch(function(error) {
				$("#Modal2").modal();//Mensaje de fracaso
			});
		}
	});
  }