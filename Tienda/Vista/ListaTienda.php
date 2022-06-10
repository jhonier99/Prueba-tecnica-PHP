<?php
require_once('../modelo/conexion.php');
require_once('../modelo/Tienda.php');
require_once('../modelo/TiendaModel.php');
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
    <title>Lista de tienda</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <link href="cover.css" rel="stylesheet">
    </head>

    <body class="d-flex h-100 text-center text-white bg-dark">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <h3 class="float-md-start mb-0">Lista de tiendas</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <br>
                        <a class="nav-link" aria-current="page" href="RegistrarTienda.php">Registrar tienda</a>
                        <a class="nav-link" aria-current="page" href="RegistrarProducto.php">Registrar producto</a>
                        <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                    </nav>
                </div>
            </header>
            <br>
            <br>
            <main class="px-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <table class="col-md-8 table table-striped table-bordered">
                            <thead class="table-info">
                                <tr class="table-info">
                                    <th class="table-info">Id</th>
                                    <th class="table-info">Nombre</th>
                                    <th class="table-info">Fecha de apertura</th>
                                    <th class="table-info">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listaTienda as $item) : ?>
                                    <tr>
                                        <td class="table-primary"><?php echo $item->getID(); ?></td>
                                        <td class="table-primary"><?php echo $item->getNombre(); ?></td>
                                        <td class="table-primary"><?php echo $item->getFecha_de_apertura(); ?></td>
                                        </td>
                                        <td class="table-primary"><a href="EditarTienda.php?ID=<?php echo $item->getID(); ?>"><img src="../public/icons/edit.svg" alt="" srcset=""></a>
                                            <a href="EliminarTienda.php?ID=<?php echo $item->getID(); ?>"><img src="../public/icons/delete-24px.svg" alt="" srcset=""></a>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
            </main>
        </div>
    </body>

</html>

</body>

</html>


<?php
?>