<?php

require "../Modelo/Conexion.php";


$id = $_GET['id'];

try {

    $stmt = $db->prepare("UPDATE empleados SET estado = :estado WHERE id_empleado = :id_empleado");
    $stmt->bindValue(':estado', "Inactivo");
    $stmt->bindValue(':id_empleado', $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("location:../Vistas/administrador/indexAdmin.php?exito=exito");
        exit();
    }else{
        header("location:../Vistas/administrador/indexAdmin.php?error=error");
        exit();
    }
}catch (Exception $e){
    $mensajeError = $e->getMessage();
    header("Location: ../Vistas/administrador/indexAdmin.php?error=" . urlencode($mensajeError));
    exit();
}