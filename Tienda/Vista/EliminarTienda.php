<?php

require_once('../modelo/conexion.php');
require_once('../modelo/Tienda.php');
require_once('../modelo/TiendaModel.php');
$Tienda = new Tienda();
$TiendaModel = new TiendaModel();
$TiendaRegistrada = $TiendaModel->obtenerTienda($_GET['ID']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <title>Eliminar tienda</title>
</head>

<body>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-body p-5 pt-0">
                    <form action="../controlador/TiendaController.php" method="POST">

                        <div class="form-floating mb-3">
                            <input type="text" name="ID" id="ID" class="form-control col-3" value="<?php echo $TiendaRegistrada->getID() ?>" readonly>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" name="Nombre" id="Nombre" class="form-control col-3" value="<?php echo $TiendaRegistrada->getNombre() ?>" readonly>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" name="Fecha_de_apertura" id="Fecha_de_apertura" class="form-control col-3" value="<?php echo $TiendaRegistrada->getFecha_de_apertura() ?>" readonly>
                        </div>
                        <br>
                        <br>
                        <a href="ListaTienda.php" class="w-100 mb-2 btn btn-lg rounded-4 btn-danger">Cancelar</a>
                        <br>
                        <br>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-warning" name="Eliminar" id="Eliminar">Eliminar</button>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>