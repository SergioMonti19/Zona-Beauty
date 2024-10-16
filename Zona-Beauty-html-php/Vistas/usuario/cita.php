<?php

session_start();
require "../../Modelo/conexion.php";
$usuario =  $_SESSION['id_usuario'];
$nombre =  $_SESSION['nombreCompleto'];

if(!isset($usuario)){ header("location:../Vistas/Login.php"); }

    $query = "SELECT id_servicio, nombre_servicio FROM servicios WHERE estado = 'Activo'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT id_empleado, nombre_completo FROM empleados WHERE estado = 'Activo' AND puesto = 'Empleado'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zona Beauty - Uñas y Pestañas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="../img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-primary px-2" href="https://www.facebook.com/profile.php?id=100091195024985&locale=es_LA">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-primary px-2" href="https://www.instagram.com/zonabeautybybm/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-primary pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="../index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">Zona</span> Beauty</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="about.php" class="nav-item nav-link">Nosotros</a>
                <a href="service.php" class="nav-item nav-link">Servicios</a>
                <a href="price.php" class="nav-item nav-link">Precios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="appoiment.php" class="dropdown-item">Citas</a>
                        <a href="opening.php" class="dropdown-item">Horario</a>
                        <a href="team.php" class="dropdown-item">Nuestro Equipo</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonios</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="../../Controlador/cerrarSesion.php" class="btn btn-primary d-none d-lg-block">Cerrar Sesión</a>
        </div>
    </nav>
</div>

<?php
if (isset($_GET['opcion']) && $_GET['opcion'] === 'error' && isset($_GET['mensaje'])) {
    $mensajeError = urldecode($_GET['mensaje']);
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error:</strong> ' . htmlspecialchars($mensajeError) . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

?>


<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row justify-content-center bg-appointment mx-0">
        <div class="col-lg-6 py-5">
            <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                <h1 class="text-white text-center mb-4">Reservar Cita</h1>
                <form method="POST" action="../../Controlador/CitaController.php">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent p-4" placeholder="<?php echo $nombre; ?>" value="<?php echo $nombre; ?>" required="required" />
                                <input type="text" name="usuario" class="form-control bg-transparent p-4" value="<?php echo $usuario; ?>" hidden="hidden" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control bg-transparent p-4" placeholder="Tu Correo Electrónico" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="fecha" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Selecciona la Fecha" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" name="hora" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Selecciona la Hora" data-target="#time" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="custom-select bg-transparent px-4" name="servicio" style="height: 47px;">
                                    <?php foreach($servicios as $servicio): ?>
                                        <option value="<?php echo $servicio['id_servicio']; ?>">
                                            <?php echo $servicio['nombre_servicio']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="custom-select bg-transparent px-4" name="empleado" style="height: 47px;">
                                    <?php foreach($empleados as $empleado): ?>
                                        <option value="<?php echo $empleado['id_empleado']; ?>">
                                            <?php echo $empleado['nombre_completo']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 mb-4">
                            <label class="form-label">Comentarios</label>
                            <textarea class="custom-select bg-transparent px-4" name="comentario"></textarea>
                        </div>
                    </div>

                    <div class="justify-content-center align-items-center">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Reservar Cita</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 mb-5">
                <a href="index.php" class="navbar-brand">
                    <h1 class="mb-3 text-white"><span class="text-primary">Zona</span> Beauty</h1>
                </a>
                <p>Nos especializamos en el cuidado y embellecimiento de uñas de manos y pies. Ofrecemos servicios de alta calidad para que siempre luzcas y te sientas bien.</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Calle, Ciudad, País</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@zonabeauty.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="row">
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Enlaces Rápidos</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sobre Nosotros</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestros Servicios</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Precios</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contáctanos</a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Nuestros Servicios</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cuidado de Uñas</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Manicura</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pedicura</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Diseño de Uñas</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Tratamientos para Uñas</a>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Boletín</h5>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tu dirección de correo electrónico">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Suscribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Zona Beauty</a>. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Diseñado por <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/easing/easing.min.js"></script>
<script src="../../lib/waypoints/waypoints.min.js"></script>
<script src="../../lib/counterup/counterup.min.js"></script>
<script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../lib/tempusdominus/js/moment.min.js"></script>
<script src="../../lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="../../mail/jqBootstrapValidation.min.js"></script>
<script src="../../mail/contact.js"></script>

<!-- Template Javascript -->
<script src="../../js/main.js"></script>
</body>

</html>