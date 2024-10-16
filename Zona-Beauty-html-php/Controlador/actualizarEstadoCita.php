<?php
require "../Modelo/conexion.php";

$idCita = $_POST['idCita'];
$estado = $_POST['estado'];

try {
    $query = "UPDATE citas SET estado = :estado WHERE id_cita = :id_cita";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':id_cita', $idCita);
    $stmt->execute();

    header("Location: ../Vistas/empleados/indexEmpleado.php?exito=estado_actualizado");
    exit();

} catch (Exception $e) {
    header("Location: ../Vistas/empleados/indexEmpleado.php?error=" . urlencode($e->getMessage()));
    exit();
}
