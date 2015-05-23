var rutacontroladora = "../../Controlador/Controlador_02a.php";


$(document).ready(function(){
	
	
	//insertar usuario datos basicos
	$("#btn-ins-usuario").click(function(){
		if($("#nombre").val()!='' && $("#correo").val()!='' && $("#clave").val()!=''){
			var user_nombre = $("#nombre").val();
			var user_correo = $("#correo").val();
			var user_clave = $("#clave").val();
		
			$.ajax({
				type: 'POST',
				url: rutacontroladora,
				data: {
					'Nombre' : user_nombre,
					'Correo' : user_correo,
					'Clave' : user_clave,
					'accion' : '0'
				},
				success: function(msj){				
					//console.log(msj);
				}
			});
		}
		else {
			alert("Campos vacios");
		}
	});
	
	//cargar informacion del usuario que inicio sesion
	$.post(rutacontroladora, {accion: 1}, function(result){
       var datos = JSON.parse(result);
       $("#nombre").val(datos.nombre);
       $("#apellido").val(datos.apellido);
       $("#imagen_actual").attr('src',datos.imagen);
       $("#genero option[value='Masculino']").attr("selected",true);
       $("#genero option")[0].remove()
       $("#sitio_web").val(datos.sitio_web);
       $("#fecha_nacimiento").val(datos.fecha_nacimiento);
       $("#pais").val(datos.fecha_nacimiento);
    });
	
	$.post(rutacontroladora, {accion:2}, function(result) {
		var paises = JSON.parse(result);
		console.log(paises);
		
	});
	
	//modificar informacion del usuario
/*	$("#btn-mod-usuario").click(function(){
		var data = new FormData(document.getElementById('file-imagen')[0]);
		$.each($('input[name^="imagen"]')[0].files, function(i, file) {
			data.append(i, file);
		});
		data.append("Nombre",$("#nombre").val());
		data.append("Apellido",$("#apellido").val());
		data.append("Genero",$("#genero :selected").text());
		data.append("Sitio",$("#sitio_web").val());
		data.append("Fecha",$("#fecha_nacimiento").val());
		data.append("Pais",$("#pais :selected").text());
		data.append("Rol",$("#rol :selected").text());
		data.append("Departamento",$("#departamento :selected").text());
		data.append("Correo",$("#correo").val());
		data.append("accion",'0');
		
		$.ajax({
			type: 'POST',
			url: rutacontroladora,
			data: data,
			contentType: false,
			processData: false,
			success: function(msj){				
				console.log(msj);
			}
		});
	});*/

});