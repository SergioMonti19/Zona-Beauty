<?php

require "../../Modelo/conexion.php";
session_start();
$usuario =  $_SESSION['idEmpleado'];
$nombre =  $_SESSION['nombreCompleto'];

if (!isset($usuario)) {
    header("location:../loginEmpleados.php");
    exit;
}


$query = "
    SELECT 
        u.nombre_completo AS usuario,
        s.nombre_servicio,
        c.fecha,
        c.hora,
        c.estado,
        c.id_cita
    FROM 
        asignacionesservicios asg
    JOIN 
        empleados e ON asg.id_empleado = e.id_empleado
    JOIN 
        citas c ON asg.id_cita = c.id_cita
    JOIN 
        servicios s ON c.id_servicio = s.id_servicio
    JOIN 
        usuarios u ON c.id_usuario = u.id_usuario
    WHERE 
        e.id_empleado = :id_empleado
    ORDER BY 
        c.fecha DESC, c.hora DESC;
";

$stmt = $db->prepare($query);
$stmt->bindParam(':id_empleado', $usuario);
$stmt->execute();
$citasAsignadas = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <a href="../../Controlador/cerrarEmpleado.php" cl   ass="btn btn-outline-danger d-none d-lg-block ml-3">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>
    </nav>
</div>
<div class="container is-fluid">
    <div class="col-xs-12">
        <br>
        <h1>Citas Asignadas</h1>
        <br><br>

        <div class="mt-3 mb-3">
            <?php
            if(isset($_GET['exito'])) {
                echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Exito!:</strong>Estado actualizado
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            };

            if(isset($_GET['error'])) {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Ohoh!:</strong>Ocurrió un error al guardar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            };
            ?>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Cliente</th>
                <th>Servicio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($citasAsignadas as $cita): ?>
                <tr>
                    <td><?php echo htmlspecialchars($cita['usuario']); ?></td>
                    <td><?php echo htmlspecialchars($cita['nombre_servicio']); ?></td>
                    <td><?php echo htmlspecialchars($cita['fecha']); ?></td>
                    <td><?php echo htmlspecialchars($cita['hora']); ?></td>
                    <td><?php echo htmlspecialchars($cita['estado']); ?></td>
                    <td>
                        <form action="../../Controlador/actualizarEstadoCita.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="idCita" value="<?php echo $cita['id_cita']; ?>">
                            <input type="hidden" name="estado" value="Cancelada">
                            <input type="submit"
                                   value="Cancelar Cita"
                                   class="btn btn-danger"
                                <?php echo ($cita['estado'] !== 'Confirmada') ? 'disabled' : ''; ?>>
                        </form>

                        <form action="../../Controlador/actualizarEstadoCita.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="idCita" value="<?php echo $cita['id_cita']; ?>">
                            <input type="hidden" name="estado" value="Completada">
                            <input type="submit"
                                   value="Cita Completada"
                                   class="btn btn-success"
                                <?php echo ($cita['estado'] !== 'Confirmada') ? 'disabled' : ''; ?>>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>
</body>
</html>
