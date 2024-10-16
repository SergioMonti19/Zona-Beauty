<?php

session_start();

require "../Modelo/Conexion.php";

// Comprobación de nombre de usuario y contraseña
if(isset($_POST['usuario']) && isset($_POST['contrasena'])) {

    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];

    $query = "SELECT id_usuario, nombre_completo, rol FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':usuario', $username);
    $stmt->bindParam(':contrasena', $password);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result) {

        $_SESSION['id_usuario'] = $result['id_usuario'];
        $_SESSION['nombreCompleto'] = $result['nombre_completo'];
        $_SESSION['rol'] = $result['rol'];

        header("Location: ../Vistas/index.php");
        exit;
    }
    else { header("Location: ../Vistas/login.php?opcion=error"); }

}

?>
