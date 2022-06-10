<html>
    <?php
    require_once('../Modelo/conexion.php');
    require_once('../Modelo/Tienda.php');
    require_once('../Modelo/TiendaModel.php');
    $Tienda = new Tienda();
    $TiendaModel = new TiendaModel();

    if(isset($_POST['Registrar'])){
        $Tienda->setNombre($_POST['Nombre']);
        $Tienda->setFecha_de_apertura($_POST['Fecha_de_apertura']);
        $registro =$TiendaModel->crearTienda($Tienda);
        if($registro){
?>         <script>
      alert('Tienda registrada');
            document.location.href = "../vista/inicio.php";
           </script> 
           <?php  
        }else{
            ?>
            <script>
                alert('La tienda ya se encuentra registrada');
                document.location.href ="../vista/inicio.php";
            </script>
            <?php
        }

    }else if(isset($_POST['Editar'])){
        $Tienda->setID($_POST['ID']);
        $Tienda->setNombre($_POST['Nombre']);
        $Tienda->setFecha_de_apertura($_POST['Fecha_de_apertura']);
        $edito= $TiendaModel->editarTienda($Tienda);
        if ($edito){
            ?>
            <script>
                alert('Tienda editada');
                document.location.href = "../Vista/ListaTienda.php";
            </script>
            <?php
        }

    }   else if (isset($_POST['Eliminar'])){
        $elimina = $TiendaModel->eliminarTienda($_POST['ID']);
        if($elimina) {
            ?>
            <script>
                alert('Tienda eliminada');
                document.location.href= "../Vista/ListaTienda.php";
            </script>
            <?php
        }
        
    }

    ?>
</html>