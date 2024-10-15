<?php

require "../../Modelo/conexion.php";
session_start();
$usuario =  $_SESSION['id_usuario'];
$nombre =  $_SESSION['nombreCompleto'];

if (!isset($usuario)) {
    header("location:../Login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.min.css">
    <link href="../../img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="../css/style.css" rel="stylesheet">
    <title>Usuarios</title>
</head>

<body style="background-color: lightpink">
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="#" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">Zona</span> <span style="color:#FF69B4;">Beauty</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="d-flex align-items-center mx-auto">
                <h2 class="m-0">Bienvenido,</h2>
                <h2 class="m-0 text-primary ml-2"><?php echo $nombre; ?></h2>
            </div>
            <a href="../../Controlador/cerrarSesion.php" class="btn btn-outline-danger d-none d-lg-block ml-3">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>
    </nav>
</div>
<div class="container is-fluid">
    <div class="col-xs-12">
        <br>
        <h1>Lista de usuarios</h1>
        <br>

        <div>
            <a class="btn btn-success" href="registroAdmin.php">Nuevo usuario
                <i class="fa fa-plus"></i>
            </a>
        </div>
        <br><br>

        <?php

            if(isset($_GET['opcion'])) {
                echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>¡Exito!:</strong> Se ha creado el registro
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
            };

        ?>

        <table class="table table-striped table-dark" id="table_id">
            <thead>
            <tr>
                <th>Id Empleado</th>
                <th>Nombre Completo</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Puesto</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $SQL = "SELECT id_empleado, nombre_completo, correo, telefono, puesto, estado FROM empleados";
            $stmt = $db->prepare($SQL);
            $stmt->execute();
            $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($empleados) > 0) {
                foreach ($empleados as $fila) {
                    ?>
                    <tr>
                        <td><?php echo $fila['id_empleado']; ?></td>
                        <td><?php echo $fila['nombre_completo']; ?></td>
                        <td><?php echo $fila['correo']; ?></td>
                        <td><?php echo $fila['telefono']; ?></td>
                        <td><?php echo $fila['puesto']; ?></td>
                        <td><?php echo $fila['estado']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="editar_usuario.php?id=<?php echo $fila['id_empleado']; ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id_empleado']; ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr class="text-center">
                    <td colspan="7">No existen registros</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>
</body>
</html>
