<?php
    include("../conf/conf.php");
?>
<!DOCTYPE html>
  <html>
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link type="text/css" rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/style.css">
        <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/gestionalo.css">
        <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/panel.css">
         <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/library.css">
         <link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/dashboard_pane.css">
        <link href="<?= PUBLIC_FOLDER ?>css/styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
    </head>
        
    <body>
      
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
        
      <ul id="nav-mobile" class="side-nav fixed nav_side_left">
				<div class="container-logotype">
					<div class="container-logotype-2">
						<img src="<?= PUBLIC_FOLDER ?>img/agencia web.png" class="logotype">
					</div>
				</div>
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
						<div class="input-field col s6">
				          <input id="first_name" type="text" class="validate">
				          <label for="first_name">Buscar Plan...</label>
				        </div>
						<img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/6.png"></img>
					</div>
					<div class="container-planes">
						<div class="menu">
							<h3><img class="img-menu" src="<?= PUBLIC_FOLDER ?>img/iconos/7.png"></img>PLANES</h3>
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
    	  <div class="col s6">
    	    
    	    <input type="text" id="inicio"  gldp-id="inicio" />  
    	  
    	    <div gldp-el="inicio" style="width:400px; height:300px; position:absolute; top:70px; left:100px;">  </div>
    
    </div>
    	  <div class="col s6">
    	    
    	    <input type="text" id="fin"  gldp-id="fin" />  
    	  
    	     <div gldp-el="fin" style="width:400px; height:300px; position:absolute; top:70px;right: 11px;"></div>
    	   </div>
    	   
    	</div>
    </main>    
    
           
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script>
           
    <script src="<?= PUBLIC_FOLDER ?>js/materialize.js"></script>
    <script type="text/javascript" src="<?= PUBLIC_FOLDER ?>js/app.js"></script>
    <script src="<?= PUBLIC_FOLDER ?>js/glDatePicker.min.js"></script>
    
     <script type="text/javascript">
      $(document).ready(function()
        {
            $('#inicio').glDatePicker({ showAlways: true});
        });
        
        $(document).ready(function()
        {
            $('#fin').glDatePicker({ showAlways: true});
        });
    </script>
    
    </body>
  </html>