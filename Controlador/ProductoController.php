<html>
    <?php
    require_once('../Modelo/conexion.php');
    require_once('../Modelo/Producto.php');
    require_once('../Modelo/ProductoModel.php');
    $Producto = new Producto();
    $ProductoModel = new ProductoModel();

    if(isset($_POST['Registrar'])){
        $Producto->setNombre($_POST['Nombre']);
        $Producto->setDescripcion($_POST['Descripcion']);
        $Producto->setValor($_POST['Valor']);
        $Producto->setIDtienda($_POST['tienda']);
        $Producto->setImagen($_POST['Imagen']);
        $registro =$ProductoModel->crearProducto($Producto);
        if($registro){
?>         <script>
      alert('Producto registrado');
            document.location.href = "../vista/ListaProducto.php";
           </script> 
           <?php  
        }else{
            ?>
            <script>
                //  alert('El producto ya se encuentra registrado');
                // document.location.href ="../Vista/ListaProducto.php";
            </script>
            <?php
        }

    }else if(isset($_POST['Editar'])){
        $Producto->setSKU($_POST['SKU']);
        $Producto->setNombre($_POST['Nombre']);
        $Producto->setIDtienda($_POST['tienda']);
        $Producto->setDescripcion($_POST['Descripcion']);
        $Producto->setValor($_POST['Valor']);
        $Producto->setImagen($_POST['Imagen']);
        $edito= $ProductoModel->editarProducto($Producto);
        if ($edito){
            ?>
            <script>
                alert('Producto editado');
                document.location.href = "../Vista/ListaProducto.php";
            </script>
            <?php
        }

    }   else if (isset($_POST['Eliminar'])){
        $elimina = $ProductoModel->eliminarProducto($_POST['Tienda']);
        if($elimina) {
            ?>
            <script>
                alert('Tienda eliminada');
                document.location.href= "../Vista/ListaProducto.php";
            </script>
            <?php
        }
        
    }

    ?>
</html>