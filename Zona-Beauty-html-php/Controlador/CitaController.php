<?php

require "../Modelo/Conexion.php";

$usuario= $_POST['usuario'];
$email= $_POST['email'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$servicio = $_POST['servicio'];
$empleado = $_POST['empleado'];
$comentario = $_POST['comentario'];

try {

    // Formatear la fecha de MM/DD/YYYY a YYYY-MM-DD
    $fechaObj = DateTime::createFromFormat('m/d/Y', $fecha);
    $fechaFormateada = $fechaObj->format('Y-m-d');

    // insert para la tabla de citas guardar data de la cita
    $stmt = $db->prepare("INSERT INTO citas (id_usuario, id_servicio, fecha, hora, estado, comentarios) VALUES (:id_usuario, :id_servicio, :fecha, :hora, :estado, :comentarios)");
    $stmt->bindValue(':id_usuario', $usuario);
    $stmt->bindValue(':id_servicio', $servicio);
    $stmt->bindValue(':fecha', $fechaFormateada);
    $stmt->bindValue(':hora', $hora);
    $stmt->bindValue(':estado', "Pendiente");
    $stmt->bindValue(':comentarios', $comentario);
    $citaInsertada = $stmt->execute();


// insert para la tabla de asignacion de servicio a empleados
    $prepquey = $db->prepare("INSERT INTO asignacionesservicios (id_empleado, id_servicio) VALUES (:id_empleado, :id_servicio)");
    $prepquey->bindValue(':id_empleado', $empleado);
    $prepquey->bindValue(':id_servicio', $servicio);
    $asignacionInsertada = $prepquey->execute();


// Comprobar si ambas inserciones fueron exitosas
    if ($citaInsertada && $asignacionInsertada) {

        header("location:../Vistas/index.php?exito=exito");
        exit();

    } else {

        header("location:../Vistas/usuario/cita.php?error=error");
        exit();
    }

}catch (Exception $e){
    $mensajeError = $e->getMessage();
    header("location:../Vistas/usuario/cita.php?opcion=error&mensaje=" . urlencode($mensajeError));
    exit();
}

