<?php
    require_once('../Modelo/conexion.php');
    require_once('../Modelo/Tienda.php');
    require_once('../Modelo/TiendaModel.php');
    $Tienda = new Tienda();
    $TiendaModel = new TiendaModel();
    $listaTienda= $TiendaModel-> consultarTienda();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <title>Registro de producto</title>
</head>

<body>

<div class="b-example-divider"></div>
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0" >Registro de producto</h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="../Controlador/ProductoController.php" method="POST">
                    <div class="form-floating mb-3">
                            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre del producto" required>
                        </div>
                        <hr>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" name="Descripcion" id="Descripcion" class="form-control" placeholder="Descripcion"  required>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="number" name="Valor" id="Valor" class="form-control" placeholder="Valor" required>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                          <select class="form-control" name="tienda" id="tienda">
                              <?php
                                  foreach ($listaTienda as $item ) {
                                ?>         
                             <option value="<?php echo $item->getID() ?>"><?php echo $item->getNombre()?></option> 
                          
                             <?php
                                  }
                             ?>
                          </select>
                        </div>
                         
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="file" name="Imagen" id="Imagen" class="form-control" placeholder="URL de la imagen" >
                        </div>
                        <hr>
                        <a class="w-100 mb-2 btn btn-lg rounded-4 btn-danger"href="inicio.php" name="cancelar" id="cancelar">Cancelar</a>
                        <br>
                        <br>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" name="Registrar" id="Registrar">Registrar</button>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>