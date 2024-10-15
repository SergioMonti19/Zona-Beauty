<?php

require "../Modelo/Conexion.php";

// formulario
$nombres = $_POST['nombres'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$confirmPass = $_POST['confirmPass'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$registro = $_POST['registro']; //admin o cliente
$rol = $_POST['rol'];

if(preg_match('/^[a-zA-Z\s]+$/', $nombres)){
    if ($contrasena == $confirmPass){
        // insertando los datos

        if ($registro == "admin"){

            $stmt = $db->prepare("INSERT INTO empleados (usuario, contrasena, nombre_completo,edad, correo, telefono, puesto, estado) VALUES (:usuario, :contrasena, :nombre_completo, :edad, :correo, :telefono, :puesto, :estado)");
            $stmt->bindValue(':usuario', $usuario);
            $stmt->bindValue(':contrasena', $contrasena);
            $stmt->bindValue(':nombre_completo', $nombres);
            $stmt->bindValue(':edad', $edad);
            $stmt->bindValue(':correo', $correo);
            $stmt->bindValue(':telefono', $telefono);
            $stmt->bindValue(':puesto', $rol);
            $stmt->bindValue(':estado', "Activo");

        }else if ($registro == "cliente"){

            $stmt = $db->prepare("INSERT INTO usuarios (nombre_completo, edad, usuario, correo, contrasena, telefono, rol) VALUES (:nombre_completo, :edad, :usuario, :correo, :contrasena, :telefono, :rol)");
            $stmt->bindValue(':nombre_completo', $nombres);
            $stmt->bindValue(':edad',  $edad);
            $stmt->bindValue(':usuario', $usuario);
            $stmt->bindValue(':correo', $correo);
            $stmt->bindValue(':contrasena', $contrasena);
            $stmt->bindValue(':telefono', $telefono);
            $stmt->bindValue(':rol', $rol);
        }


        try {

            $stmt->execute();

            if ($registro == "admin"){
                header("location: ../Vistas/administrador/indexAdmin.php?opcion=exito");
            }else if ($registro == "cliente"){
                header("location: ../Vistas/login.php");
            }

        } catch(PDOException $e) {

            echo "<div class='alert alert-danger' role='alert'>Error al registrar datos: </div> " . $e->getMessage();

        }
    }else{
        if ($registro == "admin"){
            header("location: ../Vistas/administrador/registroAdmin.php?opcion=error");
        }else if ($registro == "cliente"){
            header("location: ../Vistas/Registro.php?opcion=errorContrasena");
        }
    }
}else{
    if ($registro == "admin"){
        header("location: ../Vistas/administrador/registroAdmin.php?opcion=error");
    }else if ($registro == "cliente"){
        header("location: ../Vistas/Registro.php?opcion=errorContrasena");
    }
}

