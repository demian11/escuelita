<?php

session_start();
include "./quiz/admin/conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="ProgFun">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>ProgFun</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Incono del navegador  -->
    <link rel="icon" href="images/logo2.jpg">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html">ProgFun</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#header">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Contenido</a>
                    </li>
                   

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="./contenido/nivelHtml.php">Html</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="./contenido/nivelCSS.php">CSS</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="./contenido/nivelJava.php">JAVASCRIPT</a></li>
                        </ul>
                    </li>

                    <!-- si el usuario inicio sesion se muestra su nombre si no vera iniciar sesion -->
                    <?php
                        
                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['nombre'] ?></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="./quiz/admin/cerrar-sesion.php">cerrar sesion</a></li>
                        </ul>
                    </li>
                    <?php }else{ ?>
                        <li class="nav-item">
                        <a class="nav-link" href="./login.php">Iniciar sesion</a>
                    </li>
                        <?php } ?>
                        <!-- aqui termina para mostrar el usuario o iniciar sesion -->

                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="h1-large">ProgFun</h1>
                        <h3 class="h3-large">Aprende a programar desde cero hasta ser un experto</h3>
                        <a class="btn-solid-lg" href="#introduction">Saber mas</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->

        <!-- Video Background -->
        <video autoplay loop muted id="video-background" poster="images/header-background.jpg" playsinline>
            <source src="images/fondo.mp4" type="video/mp4" />
        </video>
        <!-- end of video background -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Introduction -->
    <div id="introduction" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">¡Bienvenido a nuestra página de cursos de programación!</h2>
                    <p class="p-heading">Aquí descubrirás todo lo que necesitas saber sobre HTML, CSS y JavaScript para convertirte en un experto en el desarrollo web.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of introduction -->

    <!-- Details -->
    <div class="split">
            <div class="area-1">
            </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
                <div class="container">    
                    <div class="row">
                        <div class="col-lg-12">     
                            
                            <!-- Text Container -->
                            <div class="text-container">
                            <h2>Temas que veras dentro de los cursos</h2>
                            <p><strong>HTML -</strong> aprenderás a crear la estructura de una página web, desde encabezados y párrafos hasta listas y enlaces. Descubrirás cómo organizar y presentar información de manera efectiva para cautivar a tus usuarios.</p>
                            <p><strong>CSS -</strong> te sumergirás en el mundo del diseño web. Aprenderás a aplicar estilos y personalizar la apariencia de tus páginas. Desde colores y fuentes hasta diseños y efectos visuales, te convertirás en un maestro del arte del diseño digital.</p>
                            <p><strong>JAVASCRIPT-</strong>el lenguaje que dará vida a tus páginas web. Descubrirás cómo agregar interactividad y funcionalidad a través de animaciones, validación de formularios, manipulación de elementos y mucho más. ¡Tu sitio web cobrará vida y cautivará a tus usuarios!</p>
                            </div> <!-- end of text-container -->
                            <!-- end of text container -->

                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of area-2 -->
        </div> <!-- end of split -->
        <!-- end of details -->

    <!-- Services 1 -->
    <div id="services" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/html.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>HTML</h2>
                        <p>Descrubre como crear tu primer pagina web iniciado desde un hola mundo, hasta aprender como agregar imagenes, videos y mas!</p>
                        <a class="read-more no-line green" href="./contenido/nivelHtml.php">Aprende HTML <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of services 1 -->

    <!-- Services 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/css.webp" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>CSS</h2>
                        <p>Adentrate en este este mundo en el que aprenderas como darle color, diseño y vida a tus paginas web a tu gusto!</p>
                        <a class="read-more no-line green" href="./contenido/nivelCSS.php">Aprende CSS <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services 2 -->

    <!-- Services 3 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/js.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>JAVASCRIPT</h2>
                        <p>Si te gusta la programacion y darle vida a tu paginas, este es tu lugar donde podras aprender hacer todo eso y mas</p>
                        <a class="read-more no-line green" href="./contenido/nivelJava.php">Aprende JAVASCRIPT <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of services 3 -->

    <!-- Projects -->
    
    <!-- end of projects -->

    <!-- Testimonials 
          __^__                                              __^__
         ( ___ )-------------------------------------------( ___ )
          | / |        dios bajo y dijo :                   | \ |
          | / |https://www.youtube.com/watch?v=jjyMuLNy2P8 | \ |
          |___|                                            |___|
         (_____)------------------------------------------(_____) 
         -->
         
    <!-- end of testimonials -->

    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Contactanos</h2>
                    <p class="p-heading">Para cualquier duda o problema que tengas, escribenos en este formulario o hablanos por nuestras redes sociales</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00123456789">3322293187</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@name.com">ProgFun@outlook.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <!-- Contact Form -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control-input" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" placeholder="Correo" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" placeholder="Agrega aqui tus dudas o comentarios" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Enviar</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>Desarrolladores</h6>
                        <p class="p-small">Damian Omar Plascencia Magaña</p>
                        <p class="p-small">Moises Antonio Altamirano Nuño</p>
                        <p class="p-small">Jose Alberto Medrano Aadredano</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>herramientas de desarrollo</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Visual Studio:  <a href="https://code.visualstudio.com/">ir a la pagina</a> </li>                                             
                            <li>Menu: <a href="#header">Home</a>, <a href="#services">Services</a>, <a href="#projects">Projects</a>, <a href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                       
                       
                        <p class="p-small">Correo de contacto empresarial <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><strong>NeverGonna@gmail.com</strong></a></p>

                        <?php
                        
                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                        <p class="p-small">Graficas de los usuarios suscritos <a href="./graficas/index.php"><strong>ver datos de usuarios</strong></a></p>
                        <?php } ?>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Prog Fun</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="./js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>