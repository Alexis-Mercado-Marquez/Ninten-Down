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
  <script src="<?php echo base_url();?>assets/js/firebase_3.js"></script>
  <script src="<?php echo base_url();?>assets/js/firebase_X.js"></script>
</div>

<div class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="barra_nav">
  <div class="container">
    <div class="navbar-header">
		<a href="<?php echo base_url();?>welcome" class="navbar-brand">NintenDown
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

<section id="reseña">
    <div class="container">
    <div class="space-10"></div>
        <div class="row">
			<div class="col-md-5 col-sm-10">
			    <div class="section-title">
				    <p class="titulos" id="title">Reseña: </p>
				</div>
			</div>
		    <div class="col-md-7 col-sm-10">
				<label class="gris" id="author">Autor  </label>
				<label class="gris" id="date">  Fecha</label>
			</div>
		</div>
	    <div class="row">
			<div class="col-md-5 col-sm-10">
				<div class="blog-about">
					<div class="space-10"></div>
					<div id="img_res"></div>
				</div>
			</div>
		    <div class="col-md-7 col-sm-10">
				<div class="section-title">
					<br><p class="texto" id="text">Texto</p>
				</div>	 
			</div>
		</div>
		<p><h5><a href="" id="link">Enlace</a></h5></p>
	</div>
</section>
<section id="comentarios">
    <div class="container">
		<br><h4>Comentarios<h4><br><!--¿Añadir contador?-->
		<div class="container" id="lista_com"></div>
	
	    <h4>Deja un comentario<h4>
		<textarea type="text" id="comment" class="form-control"
		 rows="4" cols="75"></textarea>
		<button class="btn btn-primary " name="btn_com" id="btn_com"
		style="display: none">Comentar</button>
	</div>
</section>
<div class="space-10"></div>