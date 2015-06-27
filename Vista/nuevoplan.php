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