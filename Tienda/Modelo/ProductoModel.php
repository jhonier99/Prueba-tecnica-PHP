<?php
class ProductoModel{
    function __construct()
    {
       
    }
    public function crearProducto($Nombre){
        $db = Db::Conectar();
        $sql = $db->prepare('INSERT INTO producto VALUES(NULL, :Nombre, :Descripcion, :Valor, :Tienda, :Imagen)');
        $sql->bindValue('Nombre', $Nombre->getNombre());
        $sql->bindValue('Descripcion', $Nombre->getDescripcion());
        $sql->bindValue('Valor', $Nombre->getValor());
        $sql->bindValue('Tienda', $Nombre->getIDtienda());
        $sql->bindValue('Imagen', $Nombre->getImagen());
        try {
            $sql->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

   
    public function consultarProducto()
    {
        $db = Db::Conectar();
        $sql = $db->query('SELECT * FROM producto');
        $listaProducto = [];
        foreach ($sql->fetchAll() as $Nombre) {
            $MiProducto = new Producto();
            $MiProducto->setSKU($Nombre['SKU']);
            $MiProducto->setNombre($Nombre['Nombre']);
            $MiProducto->setDescripcion($Nombre['Descripcion']);
            $MiProducto->setValor($Nombre['Valor']);
            $MiProducto->setTienda($Nombre['Tienda']);
            $MiProducto->setImagen($Nombre['Imagen']);
            $listaProducto[] = $MiProducto;
        }
        return $listaProducto;
    }
    

    public function editarProducto($Nombre)
    {
        $db = Db::Conectar();
        $sql = $db->prepare('UPDATE producto SET Nombre=:Nombre,Descripcion=:Descripcion, Valor=:Valor, Tienda=:Tienda,Imagen=:Imagen  WHERE SKU=:SKU');
        $sql->bindValue('SKU', $Nombre->getSKU());
        $sql->bindValue('Nombre', $Nombre->getNombre());
        $sql->bindValue('Descripcion', $Nombre->getDescripcion());
        $sql->bindValue('Valor', $Nombre->getValor());
        $sql->bindValue('Tienda', $Nombre->getIDtienda());
        $sql->bindValue('Imagen', $Nombre->getImagen());
        try {
            $sql->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function eliminarProducto($Tienda)
    {
        $db = Db::Conectar();
        $sql = $db->prepare('DELETE FROM producto WHERE Tienda=:Tienda');
        $sql->bindValue('Tienda', $Tienda);
        $sql->execute();
        return $sql;

    }
    public function obtenerProducto($SKU)
    {
        $db = Db::Conectar();
        $sql = $db->query("SELECT * FROM producto WHERE SKU=$SKU");
        $consulta = $sql->fetch();
        $Producto = new Producto();
        $Producto->setNombre($consulta['Nombre']);
        $Producto->setSKU($consulta['SKU']);
        $Producto->setDescripcion($consulta['Descripcion']);
        $Producto->setValor($consulta['Valor']);
        $Producto->setTienda($consulta['Tienda']);
        $Producto->setImagen($consulta['Imagen']);
        return $Producto;
    }
















}





?>