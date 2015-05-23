<?php include("../conf/conf.php"); ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>&copy; Gestionalo &#153;</title>
		<link type="text/css" rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/library.css">
		<link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/style.css">
		<link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/panel.css">
		<link rel="stylesheet" href="<?= PUBLIC_FOLDER ?>css/dashboard_pane.css">
	</head>
    
	<body>
	    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large red"><i class="large mdi-editor-mode-edit"></i></a>
	      	<ul>
		        <li><a class="btn-floating red" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-insert-chart"></i></a></li>
		        <li><a class="btn-floating yellow darken-1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-format-quote"></i></a></li>
		        <li><a class="btn-floating green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-publish"></i></a></li>
		        <li><a class="btn-floating blue" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;"><i class="large mdi-editor-attach-file"></i></a></li>
	      </ul>
	    </div>
		<header>
			<div class="container">
				<a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle">
			  	<i class="mdi-navigation-menu"></i></a>
		  	</div>
			<ul id="slide-out" class="side-nav sidenav_profile">
				<div class="container_group group_profile">    
				    <div class="row">
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
			</ul>
		    
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
		
		
			<div class="container-all"> 
				<div class="member"> 
					<h3 class="title-members"> Miembros del Plan</h3>
					<div class="miembros">
						<div class="equipo">
							<div class="profile">
								<div class="photo-friend"><a href="">Juan </a></div>
								<div class="conectado"><a href=""></a></div>
								<div class="photo-profile"> <img src="<?= PUBLIC_FOLDER ?>img/1.png" class="profile-member"></div>
							</div>
		
							<div class="profile">
								<div class="photo-friend"><a href="">Robin </a></div>
								<div class="conectado"><a href=""></a></div>
								<div class="photo-profile"> <img src="<?= PUBLIC_FOLDER ?>img/2.png" class="profile-member"></div>
							</div>
		
							<div class="profile">
								<div class="photo-friend"><a href="">Herman </a></div>
								<div class="conectado"><a href=""></a></div>
								<div class="photo-profile"> <img src="<?= PUBLIC_FOLDER ?>img/3.png" class="profile-member"></div>
							</div>
		
							<div class="profile">
								<div class="photo-friend"><a href="">Natalia </a></div>
								<div class="conectado"><a href=""></a></div>
								<div class="photo-profile"> <img src="<?= PUBLIC_FOLDER ?>img/4.png" class="profile-member"></div>
							</div>
		
							<div class="profile">
								<div class="photo-friend"><a href="">Angelita </a></div>
								<div class="conectado"><a href=""></a></div>
								<div class="photo-profile"> <img src="<?= PUBLIC_FOLDER ?>img/5.png" class="profile-member"></div>
							</div>
						
							<div class="profile">
								<div class="photo-friend"><a href="">Danna </a></div>
								<div class="inactiva"><a href=""></a></div>
								<div class="photo-profile"> <img src="<?= PUBLIC_FOLDER ?>img/6.png" class="profile-member"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="contenido row"> 
					<div class="workspace status col l3 s12">
						<h3 class="title-workspace">Estado del plan</h3>
		
						<div class="date"> 
							<div class="b4"><div class="date-begin"> <h4 class="date-text">Fecha Inicio</h4> <h5>Enero 28 de 2015</h5></div> </div>
							<div class="b5"><div class="date-final"><h4 class="date-text">Fecha Inicio</h4> <h5>Enero 28 de 2015</h5></div> </div>
						</div>
							<div id="myStat2" data-dimension="200" data-text="60%" data-info="75 dias restantes" data-width="30" data-fontsize="38" data-percent="60" data-fgcolor="#fff" data-bgcolor="#2969b0" class="circliful"></div>
						<div class="container-progress">
							<div class="divs">
								<div class="punto atrazado"></div>
								<div class="letrapunto">Atrasado</div>
							</div>
		
							<div class="divs">
								<div class="punto aldia"></div>
								<div class="letrapunto">Al d&iacute;a</div>
							</div>
							<div class="divs">
								<div class="punto adelantado"></div>
								<div class="letrapunto">Adelantado</div>
							</div>
						</div>
					</div>
		
					<div class="workspace task col l3 s12">
						<h3 class="title-workspace">
							<i class="fa fa-list-ul icon-menu"></i> Tareas	
						</h3>
						<div>
							<div class="title-today">hoy</div>
							<div class="b2">
								
		
								<div class="ba12"><i class="fa fa-circle"></i>tarea asignada numero UNO</div>
								<div class="ba12"><i class="fa fa-circle"></i>tarea asignada numero DOS</div>
								<div class="ba12"><i class="fa fa-circle"></i>tarea asignada numero TRES</div>
								<div class="ba12"><i class="fa fa-circle"></i>tarea asignada numero CUATRO</div>
								<div class="ba12"><i class="fa fa-circle"></i>tarea asignada numero CINCO</div>
		
							</div>
						</div>
						<div>
							<div class="title-today">Enero 16 de 2015</div>
							<div class="b2 ba12"><i class="fa fa-circle"></i>tarea asignada numero UNO</div>
						</div>
						<div>
							<div class="title-today">Enero 5 de 2015</div>
							<div class="b2 ba12"><i class="fa fa-circle"></i>tarea asignada numero UNO</div>
						</div>
					</div>
					<div class="workspace events col l3 s12">
						<h3 class="title-workspace"> 
							<i class="fa fa-calendar icon-menu"></i> Eventos
						</h3>
						<div class="container-events">
							<div class="a">
								<div class="date-events"> 
									<span>17 <br>Sab</span>
								</div>
								<div class="name-events"> 
									<div class="a-1"> evento UNO</div>
									<div class="a-1"> evento DOS</div>
									<div class="a-1"> evento TRES</div>
									<div class="a-1"> evento CUATRO</div>
									<div class="a-1"> evento CINCO</div>
								</div>
							</div>
						</div>
						<div class="barra"></div>
						<div class="container-events">	
							<div class="a">
								<div class="date-events "> 
									<span>19 <br>Sab</span>
								</div>
								<div class="name-events"> 
									<div class="a-1"> evento UNO</div>
									<div class="a-1"> evento DOS</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="workspace file col l3 s12">
						<div>
		
		
						<h3 class="title-workspace">
						  <i class="fa fa-file-text-o"></i>	Archivos
						</h3>
						<div class="b2">
							<div class="ba12"><i class="fa fa-file-text-o"></i>archivo numero UNO </div>
							<div class="ba12"><i class="fa fa-file-text-o"></i>archivo numero DOS </div>
							<div class="ba12"><i class="fa fa-file-text-o"></i>archivo numero TRES </div>
							<div class="ba12"><i class="fa fa-file-text-o"></i>archivo numero CUATRO </div>
							<div class="ba12"><i class="fa fa-file-text-o"></i>archivo numero CINCO </div>
						</div>
						</div>
						<div class="barra b3"> </div>
						<div class="notes">
							<h3 class="title-workspace">
								<i class="fa fa-file-text-o"></i>Notas
							</h3>
							<div class="b2">
								
							
							<div class="ba12"><i class="fa fa-file-o"></i>archivo numero UNO </div>
							<div class="ba12"><i class="fa fa-file-o"></i>archivo numero DOS </div>
							<div class="ba12"><i class="fa fa-file-o"></i>archivo numero TRES </div>
							<div class="ba12"><i class="fa fa-file-o"></i>archivo numero CUATRO </div>
							<div class="ba12"><i class="fa fa-file-o"></i>archivo numero CINCO </div>
		
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-input">
				<div class="zone-comment">
					<p class="plan-selected">PLAN NUMERO DOS</p>
				</div>
				<div class="zone-comment">
					<input type="text" name="comment" class="comment">
				</div>
				<div class="zone-comment">
					icon
				</div>
			</div>
			<div class="container-task"></div>
		</main>    
		<footer class="page-footer">
		  <div class="container">
		    <div class="row">
		      <div class="col l4 s12">
		   
		          1
		      </div>
		      <div class="col l4 s12">
		          2
		      </div>
		      <div class="col l4 s12" style="overflow: hidden;">
		            3
		      </div>
		    </div>
		  </div>
		</footer>
	       
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script>
		       
		<script src="<?= PUBLIC_FOLDER ?>js/materialize.js"></script>
		<script type="text/javascript" src="<?= PUBLIC_FOLDER ?>js/app.js"></script>
	</body>
</html>