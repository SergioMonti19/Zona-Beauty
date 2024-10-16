<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>

<main>

    <form action="../Controlador/loginEmpleController.php" method="post">

        <div class="container">

            <div class="form"> <h4>LOGIN EMPLEADOS</h4> </div>

            <i class='bx bxs-user'></i>

            <span class="user">
                <input type="text" name="user" id="user" placeholder="usuario" autocomplete="off">
                <i class='bx bxs-user'></i>
            </span>

            <span class="password">
                <input type="password" name="pass" id="contrasena" placeholder="Contraseña" autocomplete="off">
                <i class='bx bxs-lock' id="view"></i>
            </span>

            <input type="submit" value="Iniciar de sesión"> <br> <br>

            <div class="align-items-center">
                <span>Si no tienes cuenta contactate con tu administador</span>
            </div>

        </div>
    </form>


</main>

<?php
    if (isset($_GET['opcion']) && $_GET['opcion'] === 'error') {
        echo '<div class="alert alert-danger">Usuario o contraseña incorrectos.</div>';
    }

    if (isset($_GET['inactivo']) && $_GET['inactivo'] === 'inactivo') {
        echo '<div class="alert alert-warning">Este usuario está inactivo.</div>';
    }

    if (isset($_GET['error'])) {
        $mensajeError = urldecode($_GET['error']);
        echo '<div class="alert alert-danger">Error inesperado: ' . htmlspecialchars($mensajeError) . '</div>';
    }

?>

<script src="./js/mostrarContraseña.js"></script>

</body>
</html>