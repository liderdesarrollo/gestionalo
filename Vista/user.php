<?php
    include("../conf/conf.php");
?>
<!DOCTYPE html>
  <html>
    
    <head>
      <link type="text/css" rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/style.css">
        <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/gestionalo.css">
        <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/panel.css">
         <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/library.css">
         <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/dashboard_pane.css">
    </head>
        
    <body>
      
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
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
        
       
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
        
  
   <ul id="slide-out" class="side-nav sidenav_profile">
  
    
    
  </ul>
  
  
        
      <ul id="nav-mobile" class="side-nav fixed nav_side_left">
        <header class="container-logotype">
				<div class="container-logotype-2">
					<img src="<?= PUBLIC_FOLDER ?>img/agencia web.png" class="logotype">
				</div>
			</header>

			<div class="container-blue"> 

				<div class="container-avatar">
					<div class="avatar-img">
						<div class="editar"><a href="">editar</a></div>
						<div class="img-avatar">
							<img src="<?= PUBLIC_FOLDER ?>img/oscar.png" class="profile-img">
						</div>
					</div>
					<div class="avatar-name"> 
						<h3 class="name"> Oscar David</h3>
						<h4 class="profesion"> Director de empatia</h4>
					</div>
				</div>

				<div class="container-icon">
					<div class="icon a">
						<p> 23</p> <a href="#"><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/1.png"></img> </a>
					</div>
					<div class="icon b">
						<p> 13</p> <a href="#"><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/2.png"></img></a>
					</div>
					<div class="icon c">
						<p> 196</p> <a href=""><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/3.png"></img> </a>
					</div>
					<div class="icon d">
						<p> 375</p> <a href=""><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/4.png"></img></a>
					</div>
					<div class="icon e">
						<p> 34</p> <a href=""><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/5.png"></img></a>
					</div>
				</div>

				<div class="container-search">
					<input type="text" class="search" placeholder="Buscar plan..."><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/6.png"></img></i>
				</div>

				<div class="container-planes">
					<div class="menu">
						<h3><a href=""><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/7.png"></img> <strong class="title-work">PLANES</strong></a></h3>
						<ul class="menu-list">
							<li num="1">PLAN NUMERO UNO </li>
							<li num="2">PLAN NUMERO DOS </li>
							<li num="3">PLAN NUMERO TRES</li>
							<li num="4">PLAN NUMERO CUATRO</li>
							<li num="5">PLAN NUMERO CINCO</li>
							<li num="6">PLAN NUMERO SEIS</li>
							<li num="7">PLAN NUMERO SIETE</li>
						</ul>
					</div>
				</div>
			</div>
      </ul>
    </header>
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
  						<h4 class="profesion aabbb"> Director de empatia</h4></div>
				</div>
				
    	 	<div class="bloquear"><i class="small mdi-action-lock-open"></i></div>
    	 </div>
    	 
    	 <div class="col s4">
    	   
    	   <div class="container_group group_profile">    
        <div class="row abb">
              <div class="col s12">
                  <h1 class="title_group">INFORMACIÓN BÁSICA</h1>
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
    	 </div>
    	 
    	 
    	 
             
         
        </div>
    	
    </main>    
    
           
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script>
           
    <script src="<?= PUBLIC_FOLDER ?>js/materialize.js"></script>
    <script type="text/javascript" src="<?= PUBLIC_FOLDER ?>js/app.js"></script>
           
    </body>
  </html>