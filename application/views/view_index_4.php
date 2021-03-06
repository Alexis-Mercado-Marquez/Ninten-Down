<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>
  <script src="<?php echo base_url();?>assets/js/firebase_4.js"></script>
  <script src="<?php echo base_url();?>assets/js/firebase_X.js"></script>
</div>

<div class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="barra_nav">
  <div class="container">
    <div class="navbar-header">
		<a href="<?php echo base_url();?>welcome" class="navbar-brand">Ninten-Down
		    <img src="<?php echo base_url();?>assets/img/icono_N.png" height="30" width="30" alt="none">
		</a>
	</div>
	<div class="collapse navbar-collapse">
		<div id="salida"><div class="input-group derecha">
			<div class="input-group-prepend"></div>
			<button id="btn_yo" class="btn btn-primary">Mi cuenta</button>
			<button id="btn_sal" class="btn btn-dark">Salir</button>
		</div></div>
	</div>
	<form id="form" action="<?php echo base_url();?>welcome" method="POST"></form>
	<form id="formX" action="<?php echo base_url();?>welcome/load_account" method="POST"></form>
  </div>
</div>

<div class="container">
    <div class="space-10"></div>
	<p class="texto2">Escriba el nombre de la reseña o noticia y esta aparecera
	en las listas de abajo según lo que subieran los usuarios (puede estar en
	ambas listas). Para ver todas las reseñas y noticias subidas, solo deje el
	área sin escribir nada.</p>
   <div class="row">
     <div class="col-sm-6">
       <input type="textarea" class="form-control" id="que_buscar" id="que_buscar"
	    rows="5" cols="25" placeholder="Nombre a buscar">
     </div>
	 <div class="col-sm-2">
       <button class="btn btn-light" name="btn_buscar" id="btn_buscar"
	   onclick="carga_enlaces();">Buscar</button>
     </div>
	 <div class="col-sm-2">
	 <form id="Forma1" action="<?php echo base_url();?>welcome/load_review" method="POST">
       <button class="btn btn-primary " style="display: none"
	   name="btn_go1" id="btn_go1">Ver reseña</button>
	 </form>
     </div>
	 <div class="col-sm-2">
	 <form id="Forma2" action="<?php echo base_url();?>welcome/load_review" method="POST">
       <button class="btn btn-primary " style="display: none"
	   name="btn_go2" id="btn_go2">Ver noticia</button>
	 </form>
     </div>
   </div>
   <div class="space-50"></div>
   <div class="row">
     <div class="col-sm-6"><p class="texto">Reseñas</p></div>
	 <div class="col-sm-6"><p class="texto">Noticias</p></div>
   </div>
   <div class="row">
     <div class="col-sm-6">
     <select name="estilo" class="form-control" id ="rev">
     </select>
     </div>
     <div class="col-sm-6">
	   <select name="estilo" class="form-control" id ="new">
       </select>
     </div>
   </div>
</div>
<div class="space-10"></div>