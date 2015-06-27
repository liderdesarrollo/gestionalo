<?php
class Archivo {
    
    public $id,
    $equipo,
    $nombre,
    $estado;

    function __construct($id,
                    $equipo,
                    $nombre,
                    $estado) {      
        
        $this->id =  $id;
        $this->equipo =  $equipo;
        $this->nombre =  $nombre;
        $this->estado =  $estado;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getEquipo() {
        return $this->equipo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEstado() {
        return $this->estado;
    }
}

?>