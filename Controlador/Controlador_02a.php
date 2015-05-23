<?php


include("../Modelo/functions_02a.php");

$accion = $_POST["accion"];

switch ($accion) {
	case 0: insertar_usuarios(); break;
	case 1: datos_por_usuario(); break;
	case 2: cargar_paises(); break;
	case 3: cargar_departamentos(); break;
	case 4: cargar_ciudades(); break;
	default: echo "Error en datos!"; break;
}
//0- insertar usuarios
function insertar_usuarios(){
    include("../Modelo/Usuario.php"); //clase usuarios
    
	$nombre =  $_POST['Nombre'];
    $correo =   $_POST['Correo'];
    $clave =   md5($_POST['Clave']);
    
    $usuario = new Usuario('',
                            $nombre, 
    						'', 
    						'', 
    					    '', 
    						'', 
    						'', 
    					    '', 
    						'', 
    						'', 
    						'', 
    						$correo,
    						$clave);
    $controller = new Utils();
    $response = $controller->insertarUsuario($usuario);

    if($response!=false){
        echo "Usuario registrado";
    }
    else {
        echo "Error en la inserción";
    }
}
//1- cargar datos por usuario
function datos_por_usuario(){
    $controller = new Utils();
    $datos  = $controller->cargarDatosusuario('');
    echo json_encode($datos[0]);
}
//2- cargar paises
function cargar_paises(){
    $controller = new Utils();
    $datos  = $controller->cargarPaises();
    echo json_encode($datos[0]);
}



?>