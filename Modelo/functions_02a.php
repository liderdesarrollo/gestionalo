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
        $this->sql = "INSERT INTO usuarios (nombre, estado, correo, clave, rol) VALUES('".$us->getNombre()."','true','".$us->getCorreo()."','".$us->getClave()."','".$us->getRol()."')";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }  
    
    
    //funcion seleccionar datos de usuario
    function cargarDatosusuario($us){
        if($us!=''){
            $this->sql = "SELECT * FROM pais RIGHT JOIN usuarios ON pai_id = usuarios.pais LEFT JOIN departamento ON departamento.dep_id = usuarios.departamento LEFT JOIN ciudad ON ciudad.ciu_id=usuarios.ciudad WHERE usuarios.id='".$us."'";
        }
        else {
            $this->sql = "SELECT * FROM pais RIGHT JOIN usuarios ON pai_id = usuarios.pais LEFT JOIN departamento ON departamento.dep_id = usuarios.departamento LEFT JOIN ciudad ON ciudad.ciu_id=usuarios.ciudad WHERE usuarios.estado='true'";
        }
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    
    //funcion para modificar informacion de los usuarios
    function modificarUsuario($us){
        $user='10';
        $this->sql = "UPDATE usuarios SET nombre='".$us->getNombre()."', apellido='".$us->getApellido()."', imagen='".$us->getImagen()."', genero='".$us->getGenero()."', sitio_web='".$us->getSitio_web()."', fecha_nacimiento='".$us->getFecha_nacimiento()."', pais='".$us->getPais()."', rol='".$us->getRol()."', departamento='".$us->getDepartamento()."', correo='".$us->getCorreo()."', ciudad='".$us->getCiudad()."'  WHERE id='".$user."'";
        $lst = $this->con->ejecutarSQL($this->sql);
    } 
   
    //funcion para caragr todos los paises
    function cargarPaises(){
        $this->sql = "SELECT * FROM pais";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    
    //funcion para caragr todos los departamentos
    function cargarDepartamentos($pais){
        if($pais!=''){
            $this->sql = "SELECT * FROM departamento WHERE id_pais='".$pais."'";   
        }
        else{
            $this->sql = "SELECT * FROM departamento";
        }
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    
    //funcion para caragr todos los municipios
    function cargarMunicipio($dpto){
        if($dpto!=''){
            $this->sql = "SELECT * FROM ciudad WHERE id_departamento='".$dpto."'";
        }
        else {
            $this->sql = "SELECT * FROM ciudad";
        }
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    
    //funcion para eliminar un usuario
    function eliminarUsuario($us){
        $this->sql="UPDATE usuarios SET estado='false' WHERE id ='".$us."'";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }
    
    //funcion para validar dominio
    function valida_dominio($dom){
        $this->sql="SELECT COUNT(correo) as dom_existe FROM usuarios WHERE correo LIKE '%".$dom."%'";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ($lst);
    }
    
    //ultimo numero de archivo insertado
    function ultimoArchivo(){
        $this->sql = "SELECT MAX(id) as id_archivo FROM archivo";
        $lst = $this->con->ejecutarSQL($this->sql);
        return ( $lst );
    }

}
?>
