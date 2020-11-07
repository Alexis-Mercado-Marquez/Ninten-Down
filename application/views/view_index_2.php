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
  <script src="<?php echo base_url();?>assets/js/firebase_2.js"></script>
  <script src="<?php echo base_url();?>assets/js/firebase_X.js"></script>
</div>

<div class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="barra_nav">
  <div class="container">
    <div class="navbar-header">
		<a href="<?php echo base_url();?>welcome" class="navbar-brand">
		    <img src="<?php echo base_url();?>assets/img/icono_N.png" height="30" width="30" alt="none">
			Ninten-Down
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
	    <div class="col-md-7 col-sm-10">
			<div class="space-10"></div>
			<h2 id="crear">Crea tu reseña</h2>
			<div class="row">
			    <div class="col-md-8">         
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo" size="55">
                </div>
			</div>
			<label class="btn btn-file">
			    <input type="file" id="image" accept="image" class="form-control col-md-13" placeholder="Archivo" >
			    <h3><img src="<?php echo base_url();?>assets/img/upload-button.png" class="img-fluid" alt="Subir">
			    <b>Subir imagen</h3></b>
			</label>	
            <div>
                <textarea id="contenido" name="contenido" rows="12" cols="140"></textarea><br>
            </div>
	        <p> <input type="text" id="enlace" name="enlace" placeholder="Enlace al sitio de descarga del juego" size="55"> </p>
	        <button type="submit" name="Add_art" id="add_art" value="add" class="btn btn-large btn-primary">Crear reseña</button>
		</div>
	</div>
</div>
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
        <p style="font-size:25px;color:blue;text-align: center;"><b> Se ha creado su artículo </b></p>
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
         <p style="font-size:25px;color:red;text-align: center;"><b> Ese artículo ya existe </b></p>
            <center><img src = "<?php echo base_url();?>assets/img/bad.jpg"></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>      
      </div>
    </div>
  </div>
</div>
<br>