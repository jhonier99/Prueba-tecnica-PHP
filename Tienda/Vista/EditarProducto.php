<?php

require_once('../modelo/conexion.php');
require_once('../modelo/Producto.php');
require_once('../modelo/ProductoModel.php');

$Producto = new Producto();
$ProductoModel = new ProductoModel();
$ProductoRegistrado = $ProductoModel->obtenerProducto($_GET['SKU']);
require_once('../Modelo/conexion.php');
require_once('../Modelo/Tienda.php');
require_once('../Modelo/TiendaModel.php');
$Tienda = new Tienda();
$TiendaModel = new TiendaModel();
$listaTienda = $TiendaModel->consultarTienda();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <title>Editar Producto</title>
</head>

<body>
    <div class="b-example-divider"></div>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0">Editar producto</h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="../controlador/ProductoController.php" method="POST">
                    <div class="form-floating mb-3">
                            <input type="text" name="SKU" id="SKU" class="form-control col-3" value="<?php echo $ProductoRegistrado->getSKU() ?>" readonly>
                        </div>
                        <hr>


                        <div class="form-floating mb-3">
                            <input type="text" name="Nombre" id="Nombre" value="<?php echo $ProductoRegistrado->getNombre() ?>" class="form-control" placeholder="Nombre del producto" required>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" name="Descripcion" id="Descripcion" value="<?php echo $ProductoRegistrado->getDescripcion() ?>" class="form-control" required>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="number" name="Valor" id="Valor" value="<?php echo $ProductoRegistrado->getValor() ?>" class="form-control" required>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="tienda" id="tienda">
                                <?php
                                foreach ($listaTienda as $item) {
                                ?>
                                    <option value="<?php echo $item->getID() ?>"><?php echo $item->getNombre() ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="file" name="Imagen" id="Imagen" value="<?php echo $ProductoRegistrado->getImagen() ?>" class="form-control" >
                        </div>
                        <hr>
                        <a class="w-100 mb-2 btn btn-lg rounded-4 btn-danger" href="ListaProducto.php" name="Cancelar" id="Cancelar">Cancelar</a>
                        <br>
                        <br>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-warning" name="Editar" id="Editar">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>