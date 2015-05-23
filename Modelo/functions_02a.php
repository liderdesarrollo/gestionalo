<?php
include("Conexion.php");

class Utils{    
    private $con;
    private $sql;
    
    //acceder a la clase conexion para las consultas sql
    function __construct() {
         $this->con = new Conexion();
    }
    
    //funcion para crear carpetas para subir archivos al servidor
    function crearCarpetas($tmp,$name){
        $year = date('Y');
        $month = date('m');
        if(!file_exists("../uploads/".$year)){
            mkdir("../uploads/".$year, 0777);
            if(!file_exists("../uploads/".$year."/".$month)){
                mkdir("../uploads/".$year."/".$month, 0777);
                if(!move_uploaded_file($tmp, "../uploads/".$year."/".$month."/".$name)){
                    echo json_encode(array('status' => "Error"));
                }
                else{
                    return ("uploads/".$year."/".$month."/".$name);
                }
            }
        }
        else{
            if(!file_exists("../uploads/".$year."/".$month)){
                mkdir("../uploads/".$year."/".$month, 0777);
                if(!move_uploaded_file($tmp, "../uploads/".$year."/".$month."/".$name)){
                    echo json_encode(array('status' => "Error"));
                }
                else{
                   return ("uploads/".$year."/".$month."/".$name);
                }
            }
            else {
                if(!move_uploaded_file($tmp, "../uploads/".$year."/".$month."/".$name)){
                    echo json_encode(array('status' => "Error"));
                }
                else{
                    return ("uploads/".$year."/".$month."/".$name);
                }
            }
        }
    }

    //funcion para insertar usuarios
    function insertarUsuario($us){
        $this->sql = "INSERT INTO usuarios (nombre, estado, correo, clave) VALUES('".$us->getNombre()."','true','".$us->getCorreo()."','".$us->getClave()."')";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }  
    
    
    //funcion seleccionar datos de usuario
    function cargarDatosusuario($us){
        $this->sql = "SELECT * FROM usuarios WHERE id='10'";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    
    //funcion para modificar informacion de los usuarios
    function modificarUsuario($us){
        $this->sql = "UPDATE usuarios SET nombre='".$us->getNombre()."', apellido='".$us->getApellido()."', imagen='".$us->getImagen()."', genero='".$us->getGenero()."', sitio_web='".$us->getSitio_web()."', fecha_nacimiento='".$us->getFecha_nacimiento()."', pais='".$us->getPais()."', rol='".$us->getRol()."', departamento='".$us->getDepartamento()."', correo='".$us->getCorreo()."'";
        $lst = $this->con->ejecutarSQL($this->sql);
    } 
   
    //funcion para caragr todos los paises
    function cargarPaises(){
        $this->sql = "SELECT * FROM pais";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    //funcion para caragr todos los departamentos
    function cargarDepartamentos(){
        $this->sql = "SELECT * FROM departamento";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    //funcion para caragr todos los municipios
    function cargarMunicipio(){
        $this->sql = "SELECT * FROM municipio";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }

}
?>
