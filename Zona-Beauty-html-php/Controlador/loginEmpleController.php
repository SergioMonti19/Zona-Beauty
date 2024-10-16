<?php

session_start();
require "../Modelo/Conexion.php";

try {
    // Comprobación de nombre de usuario y contraseña
    if(isset($_POST['usuario']) && isset($_POST['contrasena'])) {

        $username = $_POST['usuario'];
        $password = $_POST['contrasena'];

        $query = "SELECT id_empleado, nombre_completo, puesto, estado FROM empleados WHERE usuario = :usuario AND contrasena = :contrasena";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':usuario', $username);
        $stmt->bindParam(':contrasena', $password);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0) {
            if ($result['estado'] === 'Activo') {
                $_SESSION['idEmpleado'] = $result['id_empleado'];
                $_SESSION['nombreCompleto'] = $result['nombre_completo'];
                $_SESSION['puesto'] = $result['puesto'];

                // Redirigir según el rol
                switch ($result['puesto']) {
                    case "Administrador":
                        header("Location: ../Vistas/administrador/indexAdmin.php");
                        break;
                    case "Empleado":
                        header("Location: ../Vistas/empleados/indexEmpleado.php");
                        break;
                    default:
                        header("Location: ../Vistas/empleados/indexEmpleado.php");
                        break;
                }
                exit;
            } else {
                // Si el estado no es activo
                header("Location: ../Vistas/loginEmpleados.php?inactivo=inactivo");
                exit();
            }
        } else {
            // Si no hay resultados (usuario o contraseña incorrecta)
            header("Location: ../Vistas/loginEmpleados.php?opcion=error");
            exit();
        }
    }
} catch (Exception $e) {
    // Capturar cualquier error que ocurra durante la ejecución
    $errorMessage = $e->getMessage();
    header("Location: ../Vistas/loginEmpleados.php?error=" . urlencode($errorMessage));
    exit();
}
?>
