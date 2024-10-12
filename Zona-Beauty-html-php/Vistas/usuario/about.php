<?php

session_start();
$usuario =  $_SESSION['id_usuario'];

if(!isset($usuario)){ header("location:../Vistas/Login.php"); }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zona Beauty - Uñas y Pestañas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small><i class="fa fa-phone-alt mr-2"></i>+2257 7777</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>zonabeauty@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-primary px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-primary px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-primary px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-primary px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-primary pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
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
                <a href="../index.php" class="nav-item nav-link">Inicio</a>
                <a href="about.html" class="nav-item nav-link active">Nosotros</a>
                <a href="service.html" class="nav-item nav-link">Servicios</a>
                <a href="price.html" class="nav-item nav-link">Precios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="appointment.html" class="dropdown-item">Cita</a>
                        <a href="opening.html" class="dropdown-item">Horario</a>
                        <a href="team.html" class="dropdown-item">Nuestro Equipo</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonios</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="" class="btn btn-primary d-none d-lg-block">Reservar Ahora</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Nosotros</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Inicio</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Nosotros</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="../../img/about.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Sobre Nosotros</h6>
                <h1 class="mb-4">Tu mejor opción en Cuidado de Uñas y Belleza</h1>
                <p class="pl-4 border-left border-primary">En Zona Beauty, nos dedicamos a ofrecerte los mejores
                    servicios para el cuidado de tus manos y pies. Nuestro compromiso es brindarte una experiencia
                    única y personalizada.</p>
                <div class="row pt-3">
                    <div class="col-6">
                        <div class="bg-light text-center p-4">
                            <h3 class="display-4 text-primary" data-toggle="counter-up">5</h3>
                            <h6 class="text-uppercase">Especialista en Uñas</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light text-center p-4">
                            <h3 class="display-4 text-primary" data-toggle="counter-up">300</h3>
                            <h6 class="text-uppercase">Clientes Satisfechos</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Especialista en Uñas</h6>
                <h1 class="mb-5">Conoce a nuestra experta</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="../../img/team-1.jpg" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Bertha Monti</h5>
                            <p class="m-0">Especialista Certificada en Uñas</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-3 text-white"><span class="text-primary">Zona</span> Beauty</h1>
                </a>
                <p>En Zona Beauty ofrecemos los mejores servicios de uñas con atención personalizada y certificada,
                    brindando siempre resultados excepcionales para nuestras clientas.</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Colonia Santa Lucía, El Salvador</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+503 1234 5678</p>
                <p><i class="fa fa-envelope mr-2"></i>info@zonabeauty.com</p>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="row">
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Enlaces Rápidos</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sobre
                                Nosotros</a>
                            <a class="text-white-50 mb-2" href="#"><i
                                    class="fa fa-angle-right mr-2"></i>Servicios</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Precios</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Nuestros Servicios</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i
                                    class="fa fa-angle-right mr-2"></i>Manicura</a>
                            <a class="text-white-50 mb-2" href="#"><i
                                    class="fa fa-angle-right mr-2"></i>Pedicura</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Uñas
                                Acrílicas</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Decoración
                                de Uñas</a>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Boletín Informativo</h5>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;"
                                       placeholder="Tu Correo Electrónico">
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
<div class="container-fluid bg-dark text-light border-top py-4"
     style="border-color: rgba(256, 256, 256, .15) !important;">
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