<?php
class Tienda{

    function __construct()
    {
        
    }

    private $ID;
    private $Nombre;
    private $Fecha_de_apertura;

    public function setID($ID){
        $this->ID = $ID;
    }
    public function getID(){
        return $this->ID;
    }


    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }
    public function getNombre(){
        return $this->Nombre;
    }

    public function setFecha_de_apertura($Fecha_de_apertura){
        $this->Fecha_de_apertura = $Fecha_de_apertura;
    }
    public function getFecha_de_apertura(){
        return $this->Fecha_de_apertura;
    }

}
?>