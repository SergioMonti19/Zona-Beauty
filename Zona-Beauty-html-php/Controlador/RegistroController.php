<?php

require "../Modelo/Conexion.php";

// formulario
$rol = $_POST['rol'];
$nombres = $_POST['nombres'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$confirmPass = $_POST['confirmPass'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

if(preg_match('/^[a-zA-Z\s]+$/', $nombres)){
    if ($contrasena == $confirmPass){
        // insertando los datos
        $stmt = $db->prepare("INSERT INTO usuarios (nombre_completo, edad, usuario, correo, contrasena, telefono, rol) VALUES (:nombre_completo, :edad, :usuario, :correo, :contrasena, :telefono, :rol)");
        $stmt->bindValue(':nombre_completo', $nombres);
        $stmt->bindValue(':edad',  $edad);
        $stmt->bindValue(':usuario', $usuario);
        $stmt->bindValue(':correo', $correo);
        $stmt->bindValue(':contrasena', $contrasena);
        $stmt->bindValue(':telefono', $telefono);
        $stmt->bindValue(':rol', $rol);

        try {

            $stmt->execute();
            header("location: ../Vistas/login.php");

        } catch(PDOException $e) {

            echo "<div class='alert alert-danger' role='alert'>Error al registrar datos: </div> " . $e->getMessage();

        }
    }else{
        header("location: ../Vistas/Registro.php?opcion=errorContrasena");
    }
}
else{ header("location: ../Vistas/Registro.php?opcion=error"); }

