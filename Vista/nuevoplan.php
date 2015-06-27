<?php
    include("../conf/conf.php");
?>
<!DOCTYPE html>
  <html>
   <?php include("header.php");?>
    <body>
    <main style="overflow:auto;">
      
    	<div class="general-notifications">
		<div class="padding-text">
			Juan Andres Compartio tarea asignada Numero 3
		</div>	
		<div class="padding-image">
			<img src="<?= PUBLIC_FOLDER ?>img/gestionalo_logo.png">
		</div>	
		</div>
		<div class="mitad">
		    <h4 class="center"> <img class="" src="<?= PUBLIC_FOLDER ?>img/iconos/7.png">Nuevo Plan</h4>
		<div class="row">
			<div class="col s12"><input type="text" name="name_plan" placeholder="Nombre del plan"/></div>
		</div>
    	<div class="row campos">
    	
    	<div class="col s6">
    	    <input type="text" id="inicio"  gldp-id="inicio" placeholder="Fecha inicio"/>  
    	    <div gldp-el="inicio" style="width:330px; height:250px; position:absolute; left: 12px !important; top: 232px !important;">  </div>
   		 </div>
    	  <div class="col s6">
    	    <input type="text" id="fin"  gldp-id="fin" placeholder="Fecha fin"/>  
    	     <div gldp-el="fin" style="width:330px; height:250px; position:absolute;left:366px !important; top:232px !important;"></div>
    	  </div>
    	  
    	</div>
    	<div class="row" style="margin-top:251px;">
			<div class="col s12 otro"><input type="text" name="name_plan" placeholder="Miembros"/><i class="flotante"></i></div>
		</div>
		
		<div class="row">
			<div class="buttons"> 
    			<a class="waves-effect waves-light btn public boton">Público</a>
    			<a class="waves-effect waves-light btn private boton">Privado</a>
			</div>
		</div>
		
		<div class="row boton_access">
		    
		     
		<div class="fixed-action-btn flotan" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large"><i class="large mdi-action-done icons"></i></a>
	    </div>
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