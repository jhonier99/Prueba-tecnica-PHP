<?php
class TiendaModel
{
    function __construct()
    {
        
    }
    public function crearTienda($Nombre){
        $db = Db::Conectar();
        $sql = $db->prepare('INSERT INTO tienda VALUES(NULL, :Nombre, :Fecha_de_apertura)');
        $sql->bindValue('Nombre', $Nombre->getNombre());
        $sql->bindValue('Fecha_de_apertura', $Nombre->getFecha_de_apertura());
        try {
            $sql->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function consultarTienda()
    {
        $db = Db::Conectar();
        $sql = $db->query('SELECT * FROM tienda ORDER BY ID DESC');
        $listaTienda = [];
        foreach ($sql->fetchAll() as $Nombre) {
            $MiTienda = new Tienda();
            $MiTienda->setId($Nombre['ID']);
            $MiTienda->setNombre($Nombre['Nombre']);
            $MiTienda->setFecha_de_apertura($Nombre['Fecha_de_apertura']);
            $listaTienda[] = $MiTienda;
        }
        return $listaTienda;
        
    }
    


    public function editarTienda($Nombre)
    {
        $db = Db::Conectar();
        $sql = $db->prepare('UPDATE tienda SET Nombre=:Nombre,Fecha_de_apertura=:Fecha_de_apertura WHERE ID=:ID');
        $sql->bindValue('ID', $Nombre->getID());
        $sql->bindValue('Nombre', $Nombre->getNombre());
        $sql->bindValue('Fecha_de_apertura', $Nombre->getFecha_de_apertura());
        try {
            $sql->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function eliminarTienda($ID)
    {
        $db = Db::Conectar();
        $sql = $db->prepare('DELETE FROM tienda WHERE ID=:ID');
        $sql->bindValue('ID', $ID);
        $sql->execute();
        return $sql;

    }

    public function obtenerTienda($ID)
    {
        $db = Db::Conectar();
        $sql = $db->query("SELECT * FROM tienda WHERE ID=$ID");
        $consulta = $sql->fetch();
        $Tienda = new Tienda();
        $Tienda->setID($consulta['ID']);
        $Tienda->setNombre($consulta['Nombre']);
        $Tienda->setFecha_de_apertura($consulta['Fecha_de_apertura']);
        return $Tienda;
    }



}

?>