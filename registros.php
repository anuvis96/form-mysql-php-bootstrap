<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap en HTML</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                              <div class="banner-general banner-micrositios" style=" background-image: url('imgs/admisiones-uniremington.jpg');">
                        <div class="letrero-banner-2 ocultar-movil">
                            <div class="container ancho-total">
                                <h1 class="titulo-general-micrositios"> Dirección de Registro y Control</h1>
                            </div>
                        </div>
                    </div>  
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="registros.php">Registros</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-warning card-outline text-center">
                        <h5>Registro de Personas</h5>
                        <?php
                        include "controllers/conexion.php";
                        $consulta = $conexion->query("SELECT*FROM persona");
                        $row = mysqli_num_rows($consulta);
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Primer Nombre</th>
                                    <th scope="col">Segundo Nombre</th>
                                    <th scope="col">Primer Apellido</th>
                                    <th scope="col">Segundo Apellido</th>
                                    <th scope="col">Documento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($guardar = $consulta->fetch_assoc()) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $guardar['id_usuario']; ?>
                                        </th>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['nombre1']); ?>
                                        </td>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['nombre2']); ?>
                                        </td>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['apellido1']); ?>
                                        </td>
                                        <td>
                                            <?php echo mb_strtoupper($guardar['apellido2']); ?>
                                        </td>
                                        <td>
                                            <?php echo $guardar['documento']; ?>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <a href="index.php" class="btn btn-success btn-lg">Nuevo Registro</a>
                </div>
            </div>
        </div>
    </section>



    <script src="js/bootstrap.min.js"></script>
</body>

</html>
