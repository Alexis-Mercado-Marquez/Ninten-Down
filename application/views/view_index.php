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
  <script src="assets/js/firebase_1.js"></script>
  <script src="assets/js/firebase_X.js"></script>
</div>

<div class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="barra_nav">
  <div class="container">
    <div class="navbar-header">
		<a href="#" class="navbar-brand">
		    <img src="<?php echo base_url();?>assets/img/icono_N.png" height="30" width="30" alt="none">
			Ninten-Down
		</a>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav w-120 justify-content-end">
			<li class="nav-item"><a class="nav-link" href="#inicio">INICIO </a></li>
			<li class="nav-item"><a class="nav-link" href="#presenta">PRINCIPAL </a></li>
			<li class="nav-item"><a class="nav-link" href="#reseñas">RESEÑAS </a></li>
			<li class="nav-item"><a class="nav-link" href="#noticias">NOTICIAS </a></li>
			<li class="nav-item" id="reg"><a class="nav-link" href="#registro">REGISTRARSE </a></li>
		</ul>
	</div>
  <form class="form-inline" id="formX" action="<?php echo base_url();?>welcome/load_account" method="POST">
		<div id="entrada"><div class="input-group">
		    <div class="input-group-prepend"></div>
			<input type="text" id="user_n" class="form-control fondo2" placeholder="Nombre" required>
			<input type="password" id="user_p" class="form-control fondo2" placeholder="Contraseña" required>
			<button type="button" id="btn_ent" class="btn btn-primary">Entrar</button>
		</div></div>
		<div id="salida" style="display: none"><div class="input-group">
			<div class="input-group-prepend"></div>
			<button id="btn_yo" class="btn btn-primary">Mi cuenta</button>
			<button id="btn_sal" class="btn btn-dark">Salir</button>
		</div></div>
	</form>
	<form id="form" action="<?php echo base_url();?>welcome" method="POST"></form>
  </div>
</div>

<section id="inicio" class="contenedor">
<div id="mi_carrusel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mi_carrusel" data-slide-to="0" class="active"></li>
    <li data-target="#mi_carrusel" data-slide-to="1"></li>
    <li data-target="#mi_carrusel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/img/Portada_1.jpg" alt="NES">
	</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/img/Portada_2.jpg" alt="N_64">
	</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/img/Portada_3.jpg" alt="GB_Advance">
	</div>
  </div>
</div>
<div class="texto_top"><h2>¡Entre en el mundo de los videojuegos!</h2></div>
</section>
<section id="presenta">
    <div class="container">
	    <div class="row">
		    <div class="col-md-7 col-sm-5">
				<div class="section-title">
				    <div class="space-50"></div>
					<h1 class="titulos">¿Que es Ninten-down?</h1>
					<p class="texto">Nosotros somos una página dedicada a la libre distribución de los juegos de Nintendo.
					Si quiere ver que contenido tenemos, por favor use use el buscador de abajo</p>
				</div>
				<div class="row">
					<div class="col-sm-5 col-sm-5">
						<input type="textarea" class="form-control" id="que_buscar" id="que_buscar"
						rows="5" cols="25" placeholder="Nombre a buscar">
					</div>
					<div class="col-sm-2 col-sm-5">
						<button class="btn btn-light" name="btn_buscar" id="btn_buscar">Buscar</button>
					</div>
				</div>
				<form id="FSearch" action="<?php echo base_url();?>welcome/load_search" method="POST">
				</form>
			</div>
			<div class="col-md-5 col-sm-10">
				<div class="blog-about">
					<div class="space-10"></div>
					<img src="assets/img/i_presen.jpg" class="img-responsive" alt="blog">
				</div>
			</div>
		</div>
	</div>
</section>
<section id="reseñas">
    <div class="container">
	    <div class="row">
		    <div class="col-md-7 col-sm-10">
				<div class="section-title">
				    <div class="space-50"></div>
				    <p class="titulos">Reseñas</p>
					<p class="texto">En esta seccion los usuarios podran agregar reseñas sobre
					aquellos juegos que sean (o no) de su agrado.</p>
				</div> <!--method="post"-->
				<form id="Forma1" action="<?php echo base_url();?>welcome/load_review" method="POST">
				<div id="enlaces_res">
				    <button id="btn1" class="btn"></button><br>
					<button id="btn2" class="btn"></button><br>
					<button id="btn3" class="btn"></button><br>
				</div>
				</form>
			</div>
			<div class="col-md-5 col-sm-10">
				<div class="blog-about">
					<div class="space-10"></div>
					<img src="assets/img/games.png" class="img-responsive" alt="blog">
				</div>
			</div>
		</div>
	</div>
</section>
<section id="noticias">
    <div class="container">
	    <div class="row">
            <div class="col-md-7 col-sm-10">
				<div class="section-title">
				    <div class="space-50"></div>
					<p class="titulos">Noticias</p>
					<p class="texto">En esta seccion los usuarios podran consultar las ultimas
					noticias sobre videojuegos.</p>
					<form id="Forma2" action="<?php echo base_url();?>welcome/load_review" method="POST">
					<div id="enlaces_not">
						<button id="btn4" class="btn"></button><br>
						<button id="btn5" class="btn"></button><br>
						<button id="btn6" class="btn"></button><br>
					</div>
					</form>
				</div>				 
			</div>
			<div class="col-md-5 col-sm-10">
				    <div class="blog-about">
					    <div class="space-10"></div>
					    <img src="assets/img/noticias.jpg" class="img-responsive" alt="blog">
				    </div>
			</div>
		<div>
	</div>
</section>
<section id="registro">
    <div class="container">
	    <div class="space-50"></div>
	    <p class="titulos">Registro</p>
	    <div class="row">
			<div class="col-md-3 col-sm-10"> <img src="assets/img/Control.png" alt="Imagen"></div>
            <div class="col-md-4 col-sm-10">
				<form id="Form_U">
			    	<input type="text" id="nombre" class="form-control col-md-12" placeholder="Nombre" required>          
                    <br> <input type="email" id="email" class="form-control col-md-12" placeholder="Ej.: usuario@servidor.com" required>      
                    <br> <input type="password" id="contrasena" class="form-control col-md-12" placeholder="Contraseña. " required>      
                    <br> <textarea type="text" id="comentarios" class="form-control col-md-12" placeholder="Dejanos tus comentarios" >
				    </textarea>   
                    <br> <button name="Add" id="add" value="add" class="btn btn-large btn-primary">Registrar</button>
				</div>
			</div>
        </div>
    </div>
</section>
<section id="extra">
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Level complete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size:25px;color:blue;text-align: center;"><b> Ha entrado a su cuenta. </b></p>
            <center><img src = "<?php echo base_url();?>assets/img/good.jpg"></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>      
      </div>
    </div>
  </div>
</div>
	
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="ModalLabel">Nuevo mensaje</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p style="font-size:25px;color:red;text-align: center;"><b> Ese nombre de usuario ya existe </b></p>
            <center><img src = "<?php echo base_url();?>assets/img/bad.jpg"></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>      
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Level complete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size:25px;color:blue;text-align: center;"><b> Se ha creado su usuario. </b></p>
            <center><img src = "<?php echo base_url();?>assets/img/good.jpg"></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>      
      </div>
    </div>
  </div>
</div>
</section>
<div class="space-10"></div>