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
  <script src="<?php echo base_url();?>assets/js/firebase_5.js"></script>
  <script src="<?php echo base_url();?>assets/js/firebase_X.js"></script>
</div>

<div class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="barra_nav">
  <div class="container">
    <div class="navbar-header">
		<a href="<?php echo base_url();?>welcome" class="navbar-brand">
		    <img src="<?php echo base_url();?>assets/img/icono_N.png" height="30" width="30" alt="none">
			Mi-Cuenta
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
	<div class="row">
    <div class="col-md-12 col-sm-10">
		<img src="<?php echo base_url();?>assets/img/Metroid3.png"> 
    </div>
	<div class="col-md-12 col-sm-10">
		<p style="font-size:20px; text-align: justify;"> En esta página puedes ver
		los links de las reseñas y las noticias  de videojuegos que has creado y se mostraran
		la<br>opcion para crear nuevas reseñas y noticias.</p>
	</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-sm-10">
		<div class="contenedora">
		<form id="form_rev" action="<?php echo base_url();?>welcome/load_maker" method="POST">
			<div> <center><p class="resenas">Reseñas</p>
				<div id="sec_rev"></div>
				<br><button id="add_rev" value="rev"
				class="btn btn-large btn-primary">Nueva reseña</button>
			</center></div>
		</form>
		</div>
	</div>
	<div class="col-md-4 col-sm-10">
		<div class="contenedora">
        <form id="form_new" action="<?php echo base_url();?>welcome/load_maker" method="POST">
			<div> <center><p class="noticias">Noticias</p>
				<div id="sec_new"></div>
				<br><button id="add_new" value="new"
				class="btn btn-large btn-warning">Nueva noticia</button>
			</center></div>
		</form>
		</div>
	</div>
    </div>
</div>
<br>