<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/registro.css">

    <title>Registro</title>

</head>

<body>

    <main>

        <form method="post" action="../Controlador/RegistroController.php">
            <?php

            if(isset($_GET['opcion'])) {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> No se permiten caracteres o números en Campo "Nombre", "Apellido"
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            };

            if(isset($_GET['errorContrasena'])) {
                echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> Las contraseñas no coinciden
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            };

            ?>

            <div class="container">

                <div class="form"><h1>REGISTRO</h1></div>

                <input type="text" id="rol " name="rol" value ="Cliente" hidden="hidden">

                <span class="name">
                        <input type="text" id="nombre" name="nombres" placeholder="Nombre Completo" required>
                </span>

                <span class="edad">
                        <input type="number" id="edad" name="edad" placeholder="Edad" min="18" max="70" required="required">
                </span>


                <span class="name">
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                </span>

                <span class="password">
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                        <i class='bx bxs-lock' id="view" ></i>
                </span>

                <span class="password">
                        <input type="password" id="confirmPass" name="confirmPass" placeholder="Confirmar Contraseña" required>
                        <i class='bx bxs-lock' id="view" ></i>
                </span>

                <span class="email">
                        <input type="email" id="correo" name="correo" placeholder="Correo Electronico" required>
                        <i class='bx bxs-envelope' ></i>
                </span>

                <span class="document">
                        <input type="text" id="telefono" name="telefono" placeholder="Telefono" required>
                </span>

                <input type="submit" value="Registrarse" id="Registrar">

                <div class="align-items-center">
                    <a href="Login.php">
                        ¿Ya tienes cuenta?. Logueate!
                    </a>
                </div>

                <br>

                <div class="align-items-center">
                    <a href="../index.html">
                        Volver
                    </a>
                </div>
            </div>
        </form>
    </main>

    <script src="./js/mostrarContraseña.js"></script>

    </body>
</html>