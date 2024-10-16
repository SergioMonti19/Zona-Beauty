<?php

require "../Modelo/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtener los datos del formulario
    $id_empleado = $_POST['id_empleado'];
    $nombre_completo = $_POST['nombres'];
    $edad = $_POST['edad'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['rol'];

    try {
        // Preparar la consulta de actualización
        $query = "UPDATE empleados SET nombre_completo = :nombre_completo, edad = :edad, usuario = :usuario, correo = :correo, telefono = :telefono, puesto = :rol WHERE id_empleado = :id_empleado";
        $stmt = $db->prepare($query);

        // Vincular los valores
        $stmt->bindParam(':nombre_completo', $nombre_completo);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':rol', $rol);
        $stmt->bindParam(':id_empleado', $id_empleado);

        // Ejecutar la consulta
        $actualizado = $stmt->execute();

        if ($actualizado) {
            // Redirigir con éxito si la actualización fue correcta
            header("Location: ../Vistas/administrador/indexAdmin.php?exito=actualizado");
            exit();
        } else {
            // Redirigir si hubo un error en la actualización
            header("Location: ../Vistas/administrador/editarEmpleado.php?id=$id_empleado&error=actualizacion_fallida");
            exit();
        }

    } catch (PDOException $e) {
        // Capturar cualquier error y redirigir
        $mensajeError = $e->getMessage();
        header("Location: ../Vistas/administrador/editarEmpleado.php?id=$id_empleado&error=" . urlencode($mensajeError));
        exit();
    }

} else {
    // Redirigir si el acceso no es por POST
    header("Location: ../Vistas/administrador/indexAdmin.php");
    exit();
}

?>
