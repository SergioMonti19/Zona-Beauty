<?php

session_start();

require "../Modelo/Conexion.php";

// Comprobación de nombre de usuario y contraseña
if(isset($_POST['user']) && isset($_POST['pass'])) {

    $username = $_POST['user'];
    $password = $_POST['pass'];

    echo $username;
    echo $password;


    $query = "SELECT id_empleado, nombre_completo, puesto, estado FROM empleados WHERE usuario = :usuario AND contrasena = :contrasena";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':usuario', $username);
    $stmt->bindParam(':contrasena', $password);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount() > 0) {
            if ($result['estado'] == 'Activo') {
            $_SESSION['idEmpleado'] = $result['id_empleado'];
            $_SESSION['nombreCompleto'] = $result['nombre_completo'];
            $puesto = $result['puesto'];
            echo $puesto;
            echo $result['estado'];
            // Redirigir según el rol
            switch ($puesto) {
                case "Administrador":
                    header("location: ../Vistas/administrador/indexAdmin.php");
                    break;
                case "Empleado":
                    header("location: ../Vistas/empleados/indexEmpleado.php");
                    break;
                default:
                    header("location: ../Vistas/empleados/indexEmpleado.php");
                    break;
            }
            exit;
        } else {
            // Si el estado no es activo
            header("location: ../Vistas/loginEmpleados.php?inactivo=inactivo");
            exit();
        }
    } else {
        // Si no hay resultados (usuario o contraseña incorrecta)
        header("Location: ../Vistas/loginEmpleados.php?opcion=error");
        exit();
    }
}
?>
