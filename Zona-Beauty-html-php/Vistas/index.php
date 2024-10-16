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

    <link href="../img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid bg-light d-none d-lg-block">
<div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+503 7666 9511</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>zonabeauty@gmail.com</small>
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
        <a href="#" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">Zona</span> Beauty</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="usuario/about.php" class="nav-item nav-link">Nosotros</a>
                <a href="usuario/service.php" class="nav-item nav-link">Servicios</a>
                <a href="usuario/price.php" class="nav-item nav-link">Precios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="usuario/cita.php" class="dropdown-item">Citas</a>
                        <a href="usuario/opening.php" class="dropdown-item">Horario</a>
                        <a href="usuario/team.php" class="dropdown-item">Nuestro Equipo</a>
                    </div>
                </div>
                <a href="usuario/contact.php" class="nav-item nav-link">Contacto</a>
                <a href="usuario/misCitas.php" class="nav-item nav-link">Mis Citas</a>
            </div>
            <a href="../Controlador/cerrarSesion.php" class="btn btn-primary d-none d-lg-block">Cerrar Sesión</a>
        </div>
    </nav>
</div>

<?php
if(isset($_GET['opcion'])) {
    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Exito!:</strong>Has agendado tu cita!. Te esperamos en Zona Beauty. 😘
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
};
?>



<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="../img/carousel-1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Bienvenid@</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">
                        <?php
                            if (isset($_SESSION['nombreCompleto'])) {
                                echo htmlspecialchars($_SESSION['nombreCompleto']) . "!";
                            }
                        ?>
                        </h3>
                        <p class="mx-md-5 px-5">¿Deseas agendar una cita? Vamos!</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="usuario/cita.php">Reservar Cita</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="../img/carousel-2.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Bienvenid@</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">
                            <?php
                            if (isset($_SESSION['nombreCompleto'])) {
                                echo htmlspecialchars($_SESSION['nombreCompleto']) . "!";
                            }
                            ?>
                        </h3>
                        <p class="mx-md-5 px-5">¿Deseas agendar una cita? Vamos!</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="usuario/cita.php">Reservar Cita</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="../img/carousel-3.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Bienvenid@</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">
                            <?php
                            if (isset($_SESSION['nombreCompleto'])) {
                                echo htmlspecialchars($_SESSION['nombreCompleto']) . "!";
                            }
                            ?>
                        </h3>
                        <p class="mx-md-5 px-5">¿Deseas agendar una cita? Vamos!</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="usuario/cita.php">Reservar Cita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="Sobre nosotros">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Nosotros</h6>
                    <h1 class="mb-4">Tu mejor centro especializado en uñas</h1>
                    <p class="pl-4 border-left border-primary">Nos dedicamos a embellecer tus manos y pies con
                        tratamientos profesionales de manicura y pedicura. Nuestro objetivo es ofrecerte una experiencia
                        relajante mientras cuidamos cada detalle para que tus uñas luzcan impecables.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">1</h3>
                                <h6 class="text-uppercase">Especialistas</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">150</h3>
                                <h6 class="text-uppercase">Clientes Felices</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Nuestros Servicios</h6>
            <h1>Servicios de Uñas</h1>
        </div>
    </div>
    <div class="owl-carousel service-carousel">
        <div class="service-item position-relative">
            <img class="img-fluid" src="../img/service-1.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Manicura Clásica</h4>
                <p class="text-white px-3 mb-3">Un tratamiento completo para embellecer tus manos y uñas.</p>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="usuario/cita.php">Hacer Pedido</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="../img/service-2.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Pedicura Spa</h4>
                <p class="text-white px-3 mb-3">Relájate con nuestra pedicura spa, ideal para cuidar tus pies.</p>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="usuario/cita.php">Hacer Pedido</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="../img/service-3.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Uñas Acrílicas</h4>
                <p class="text-white px-3 mb-3">Dale un toque especial a tus manos con nuestras uñas acrílicas.</p>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="usuario/cita.php">Hacer Pedido</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="../img/service-4.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Decoración de Uñas</h4>
                <p class="text-white px-3 mb-3">Haz que tus uñas se vean increíbles con nuestra decoración personalizada.</p>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="usuario/cita.php">Hacer Pedido</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="../img/service-5.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Manicura Francesa</h4>
                <p class="text-white px-3 mb-3">La clásica manicura francesa para un look elegante y natural.</p>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="usuario/cita.php">Hacer Pedido</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="../img/service-6.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Tratamiento de Uñas</h4>
                <p class="text-white px-3 mb-3">Fortalece y cuida tus uñas con nuestros tratamientos especiales.</p>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="usuario/cita.php">Hacer Pedido</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Open Hours Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="../img/opening.jpg" alt="" width="500" height="600";">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Horarios de Atención</h6>
                    <h1 class="mb-4">Zona de Relax y Cuidado de Uñas</h1>
                    <p>Te ofrecemos un espacio cómodo y acogedor para el cuidado de tus uñas. Ven y disfruta de nuestros servicios especializados en manicura y pedicura.</p>
                    <ul class="list-inline">
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Martes – Vie : 9:00 AM - 7:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sábados : 9:00 AM - 6:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Lunes : Cerrado</li>
                    </ul>
                    <a href="#" class="btn btn-primary mt-2">Reservar Ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Open Hours End -->


<!-- Pricing Start -->
<div class="container-fluid bg-pricing" style="margin: 90px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="../img/pricing.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                    <div class="owl-carousel pricing-carousel">
                        <div class="bg-white">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>10<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Manicura</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Manicura Básica</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Formación de Uñas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Cuidado de Cutículas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Aplicación de Esmalte</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Masaje de Manos</p>
                                <a href="" class="btn btn-primary my-2">Pedir Ahora</a>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>15<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Pedicura</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Pedicura Clásica</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Formación de Uñas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Exfoliación</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Cuidado de Cutículas</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Masaje de Pies</p>
                                <a href="" class="btn btn-primary my-2">Pedir Ahora</a>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>25<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Arte en Uñas</small>
                                </h1>
                                <h5 class="text-primary text-uppercase m-0">Diseño de Uñas</h5>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Diseño Personalizado</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Geles y Acrílicos</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Cuidado de Uñas de Lujo</p>
                                <p><i class="fa fa-check text-success mr-2"></i>Acabado Duradero</p>
                                <a href="" class="btn btn-primary my-2">Pedir Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing End -->

  <!-- Team Start -->
  <div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Especialista en Uñas</h6>
                <h1 class="mb-5">Conoce a Nuestra Dueña</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="img/team-1.jpg" alt="" width="600" height="200">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Bertha Monti</h5>
                            <p class="m-0">Dueña y Especialista en Uñas</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#">https://www.facebook.com/profile.php?id=100091195024985&locale=es_LA<i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#">https://www.instagram.com/zonabeautybybm/<i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="../img/testimonial.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                <h1 class="mb-4">Lo Que Dicen Nuestros Clientes</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="../img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="text-uppercase">Cliente Satisfecho</h6>
                                <span></span>
                            </div>
                        </div>
                        <p class="m-0">"La atención y el servicio son excepcionales. Me encanta cómo cuidan mis uñas, siempre salgo feliz de cada cita."</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="../img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="text-uppercase">Cliente Satisfecho</h6>
                                <span></span>
                            </div>
                        </div>
                        <p class="m-0">"Siempre obtengo el mejor servicio aquí. Definitivamente volveré para mis próximas citas."</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="../img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="text-uppercase">Cliente Satisfecho</h6>
                                <span></span>
                            </div>
                        </div>
                        <p class="m-0">"El lugar es muy acogedor y la dueña es muy profesional. Mis uñas lucen increíbles."</p>
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="text-primary">Clientes Satisfechos: <span data-toggle="counter-up">150</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

 <!-- Footer Start -->
 <div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">Zona</span> Beauty</h1>
                    </a>
                    <p>Nos especializamos en el cuidado y embellecimiento de uñas de manos y pies. Ofrecemos servicios
                        de alta calidad para que siempre luzcas y te sientas bien.</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Colonia Santa Lucia, Ilopango</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+503 7666 9511</p>
                    <p><i class="fa fa-envelope mr-2"></i>zonabeauty@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100091195024985&locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="https://www.instagram.com/zonabeautybybm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Enlaces Rápidos</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                                <a class="text-white-50 mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>Sobre
                                    Nosotros</a>
                                <a class="text-white-50 mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Nuestros
                                    Servicios</a>
                                <a class="text-white-50 mb-2" href="price.html"><i class="fa fa-angle-right mr-2"></i>Precios</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Nuestros Servicios</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Cuidado de
                                    Uñas</a>
                                <a class="text-white-50 mb-2" href="service.html"><i
                                        class="fa fa-angle-right mr-2"></i>Manicura</a>
                                <a class="text-white-50 mb-2" href="service.html"><i
                                        class="fa fa-angle-right mr-2"></i>Pedicura</a>
                                <a class="text-white-50 mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Diseño de
                                    Uñas</a>
                                <a class="text-white-50" href="service.html"><i class="fa fa-angle-right mr-2"></i>Tratamientos
                                    para Uñas</a>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Boletín</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;"
                                        placeholder="Tu dirección de correo electrónico">
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
            </div>
        </div>
    </div>
    <!-- Footer End -->
     
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/counterup/counterup.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/tempusdominus/js/moment.min.js"></script>
<script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="../mail/jqBootstrapValidation.min.js"></script>
<script src="../mail/contact.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>
</body>

</html>