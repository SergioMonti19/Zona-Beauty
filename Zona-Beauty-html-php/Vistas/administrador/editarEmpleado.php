<?php

require "../../Modelo/conexion.php";
session_start();
$usuario =  $_SESSION['idEmpleado'];
$nombre =  $_SESSION['nombreCompleto'];

if (!isset($usuario)) {
    header("location:../loginEmpleado.php");
    exit;
}


$id_empleado = $_GET['id'];

$query = "SELECT nombre_completo, edad, usuario, correo, telefono, puesto FROM empleados WHERE id_empleado = :id_empleado";
$stmt = $db->prepare($query);
$stmt->bindParam(':id_empleado', $id_empleado);
$stmt->execute();
$empleado = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.min.css">
        <link href="../../img/favicon.ico" rel="icon">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <link href="../../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/editarEmpleado.css" rel="stylesheet">
        <title>Empleados</title>
    </head>
    <body style="background-color: lightpink">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="#" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">Zona</span> <span style="color:#FF69B4;">Beauty</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="d-flex align-items-center mx-auto">
                    <h2 class="m-0">Bienvenido,</h2>
                    <h2 class="m-0 text-primary ml-2"><?php echo $nombre; ?></h2>
                </div>
                <a href="../../Controlador/cerrarSesion.php" class="btn btn-outline-danger d-none d-lg-block ml-3">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
            </div>
        </nav>
    </div>
    <main>

        <form method="post" action="../../Controlador/UpdateEmpleado.php">
            <?php

            if (isset($_GET['exito'])) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>¡Éxito!</strong> Los datos han sido actualizados correctamente.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }

            if (isset($_GET['error'])) {
                $mensajeError = urldecode($_GET['error']); // Decodifica el mensaje de error
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> ' . htmlspecialchars($mensajeError) . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }

            ?>

            <div class="container mt-4">

                <div class="form"><h3>Actualizacion de Datos</h3></div>


                <input type="hidden" name="id_empleado" value="<?php echo htmlspecialchars($id_empleado); ?>">

                <span class="name">
                <input type="text" id="nombre" name="nombres" value="<?php echo htmlspecialchars($empleado['nombre_completo']); ?>" placeholder="Nombre Completo" required>
            </span>

                <span class="edad">
                <input type="number" id="edad" name="edad" value="<?php echo htmlspecialchars($empleado['edad']); ?>" placeholder="Edad" min="18" max="70" required="required">
            </span>

                <span class="name">
                <input type="text" id="usuario" name="usuario" value="<?php echo htmlspecialchars($empleado['usuario']); ?>" placeholder="Usuario" required>
            </span>

                <span class="email">
                <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($empleado['correo']); ?>" placeholder="Correo Electrónico" required>
                <i class='bx bxs-envelope'></i>
            </span>

                <span class="document">
                <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($empleado['telefono']); ?>" placeholder="Teléfono" required>
            </span>

                <input type="text" id="registro" name="registro" value="admin" hidden="hidden">

                <span class="document">
                <select id="rol" name="rol">
                    <option value="Administrador" <?php echo ($empleado['puesto'] == 'Administrador') ? 'selected' : ''; ?>>Administrador</option>
                    <option value="Empleado" <?php echo ($empleado['puesto'] == 'Empleado') ? 'selected' : ''; ?>>Empleado</option>
                </select>
            </span>

                <input type="submit" value="Actualizar" id="Actualizar">

                <a href="indexAdmin.php">Volver</a>
            </div>
        </form>
    </main>
    </body>
</html>