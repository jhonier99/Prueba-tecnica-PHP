<?php
class Producto{
    function __construct()
    {
        
    }
    private        $Nombre;
     private       $SKU;
     private       $Descripcion;
     private       $Valor;
     private       $Tienda;
     private       $Imagen;
     private       $IDtienda;



     public function setIDtienda($IDtienda){
        $this->IDtienda = $IDtienda;
    }
    public function getIDtienda(){
        return $this->IDtienda;
    }
    
    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }
    public function getNombre(){
        return $this->Nombre;
    }

    public function setSKU($SKU){
        $this->SKU = $SKU;
    }
    public function getSKU(){
        return $this->SKU;
    }

    
    public function setDescripcion($Descripcion){
        $this->Descripcion = $Descripcion;
    }
    public function getDescripcion(){
        return $this->Descripcion;
    }

    public function setValor($Valor){
        $this->Valor = $Valor;
    }
    public function getValor(){
        return $this->Valor;
    }

    public function setTienda($Tienda){
        $this->Tienda = $Tienda;
    }
    public function getTienda(){
        return $this->Tienda;
    }

    public function setImagen($Imagen){
        $this->Imagen = $Imagen;
    }
    public function getImagen(){
        return $this->Imagen;
    }

}
?>