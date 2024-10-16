<?php
require "../Modelo/conexion.php";

$id_cita = $_POST['idCita'];
$estado = $_POST['estado'];

try {
    $query = "UPDATE citas SET estado = :estado WHERE id_cita = :id_cita";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':estado', $estado);
    $stmt->bindValue(':id_cita', $id_cita);
    $stmt->execute();

    echo "<script>console.log('Error: " . addslashes($id_cita) . "');</script>";

    if ($stmt->rowCount() > 0){
        header("Location: ../Vistas/usuario/misCitas.php?opcion=confirmada");
        exit();
    }else{
        header("Location: ../Vistas/usuario/misCitas.php?error=error");
        exit();
    }


}catch (Exception $e){
    $errorMessage = $e->getMessage();
    echo "<script>console.log('Error: " . addslashes($errorMessage) . "');</script>";
    header("Location: ../Vistas/usuario/misCitas.php?error=error");
    exit();
}
?>
