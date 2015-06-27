<?php
    include("../conf/conf.php");
?>
<!DOCTYPE html>
  <html>
  	
  	<!-- import the header-->
    <?php include("header.php");?>
        
    <body>
    <main>
      
    	<div class="general-notifications">
		<div class="padding-text">
			Juan Andres Compartio tarea asignada Numero 3
		</div>	
		<div class="padding-image">
			<img src="<?= PUBLIC_FOLDER ?>img/gestionalo_logo.png">
		</div>	
	</div>
	
    	<div class="row">
    		
    	 <div class="col s8 fondo">
    	   <img class="imagenblur" src="http://www.montescomunicacion.com/mcblog/wp-content/uploads/2013/07/agenda-eventos-marbella.jpg">
    	 	<div class="photo"> <a href="#"><i class="small mdi-image-camera-alt"></i></a></div>
    	 	
    	 	<div class="contenido-centrado"> 
      	 	<div class="img-avatar">
  							<img src="<?= PUBLIC_FOLDER ?>img/oscar.png" class="profile-img">
  				</div>
      	 	<div class="image_profile"><a href="#" data-activates="slide-out" class="button-collapse1"> <i class="small mdi-action-account-circle"></i></a> </div>
      	 	<div> 
  						<h3 class="name aabb"> Oscar David</h3>
  						<h4 class="profesion aabbb"> Director de empatia</h4>
  							<a class="waves-effect waves-light btn">Administrador</a>
  				</div>
				</div>
    	 	<div class="bloquear"><i class="small mdi-action-lock-open"></i></div>
    	 	</div>
        <div class="col s4 aabbc">
          <div class="fixed-action-btn" style="bottom: 28px;left: 5px;">
          <a class="btn-floating btn-large red">
            <i class="large mdi-editor-mode-edit"></i>
          </a>
          <ul>
            <li><a class="btn-floating red" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-insert-chart"></i></a></li>
            <li><a class="btn-floating yellow darken-1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-format-quote"></i></a></li>
            <li><a class="btn-floating green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-publish"></i></a></li>
            <li><a class="btn-floating blue" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-attach-file"></i></a></li>
          </ul>
        </div>
              <div class="col s12">
                  <h1 class="title_group">INFORMACI&Oacute;N B&Aacute;SICA</h1>
              </div>
              <div class="col s12">
                  <span class="label_group">Oscar David Ramirez Jimenez</span>
                  <span class="label_caption">Nombre</span>
              </div>
              <div class="col s12">
                  <span class="label_group">Masculino</span>
                  <span class="label_caption">Genero</span>
              </div>
              <div class="col s12">
                  <span class="label_group">Junio 25</span>
                  <span class="label_caption">Cumpleaños</span>
              </div>
              <div class="col s12">
                  <span class="label_group">Director de Empatia</span>
                  <span class="label_caption">Cargo</span>
              </div>
        </div>
    	 </div>
    </main>    
    
           
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script>
           
    <script src="<?= PUBLIC_FOLDER ?>js/materialize.js"></script>
    <script type="text/javascript" src="<?= PUBLIC_FOLDER ?>js/app.js"></script>
           
    </body>
  </html>