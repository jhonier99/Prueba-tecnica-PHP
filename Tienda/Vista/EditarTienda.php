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
    <title>Editar tienda</title>
</head>

<body>
    <div class="b-example-divider"></div>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0">Editar tienda</h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="../controlador/TiendaController.php" method="POST">
                    <div class="form-floating mb-3">
                            <input type="hidden" name="ID" id="ID" value="<?php echo $_GET['ID']?>" class="form-control">
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" name="Nombre" id="Nombre" value="<?php echo $TiendaRegistrada->getNombre()?>" class="form-control" placeholder="Nombre de la tienda" required>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="date" name="Fecha_de_apertura" id="Fecha_de_apertura" value="<?php echo $TiendaRegistrada->getFecha_de_apertura()?>" class="form-control"  required>
                        </div>
                        <hr>
                        <a class="w-100 mb-2 btn btn-lg rounded-4 btn-danger" href="ListaTienda.php" name="Cancelar" id="Cancelar">Cancelar</a>
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