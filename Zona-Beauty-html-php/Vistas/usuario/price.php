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
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
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


    <!-- Navbar Inicio -->
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
                <a href="about.php" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="price.php" class="nav-item nav-link active">Precios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="cita.php" class="dropdown-item">Citas</a>
                        <a href="opening.php" class="dropdown-item">Horarios</a>
                        <a href="team.php" class="dropdown-item">Nuestro Equipo</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="" class="btn btn-primary d-none d-lg-block">Reserva Ahora</a>
        </div>
    </nav>
</div>
<!-- Navbar Fin -->


    <!-- Header Inicio -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Precios</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Inicio</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Precios</p>
        </div>
    </div>
</div>
<!-- Header Fin -->


    <!-- Pricing Inicio -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="../../img/pricing.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                    <div class="owl-carousel pricing-carousel">
                        <div class="bg-white">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>20<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mani</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Plan Básico</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Cuidado Básico de Uñas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Esmalte Simple</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Retiro de Esmalte</p>
                                <a href="" class="btn btn-primary my-2">Hacer Pedido</a>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>35<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mani</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Plan Familiar</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Cuidado Completo de Uñas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Diseño de Uñas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Esmalte Semipermanente</p>
                                <a href="" class="btn btn-primary my-2">Hacer Pedido</a>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>50<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mani</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Plan VIP</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Cuidado Avanzado de Uñas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Pedicura Completa</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Diseño Personalizado</p>
                                <a href="" class="btn btn-primary my-2">Hacer Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Fin -->

  <!-- Horarios de Atención Inicio -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="../../img/opening.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Horarios de Atención</h6>
                    <h1 class="mb-4">El Mejor Servicio de Cuidado de Uñas</h1>
                    <p>Estamos dedicados a ofrecerte la mejor experiencia en cuidado de uñas, garantizando calidad y satisfacción.</p>
                    <ul class="list-inline">
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Lunes – Viernes: 9:00 AM - 7:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sábado: 9:00 AM - 6:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Domingo: Cerrado</li>
                    </ul>
                    <a href="" class="btn btn-primary mt-2">Reserva Ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Horarios de Atención Fin -->


    <!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-3 text-white"><span class="text-primary">Zona</span> Beauty</h1>
                </a>
                <p>Nos dedicamos al cuidado y embellecimiento de uñas, brindando una experiencia única y personalizada para cada cliente.</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Colonia Santa Lucia, El Salvador</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@zonabeauty.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
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
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Decoración de Uñas</a>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Boletín</h5>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tu Correo Electrónico">
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
                <p class="m-0 text-white">&copy; <a href="#">Zona Beauty</a>. Todos los Derechos Reservados.</p>
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