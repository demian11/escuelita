<?php

session_start();
include ".././quiz/admin/conexion.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/nivelhtml.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Niveles</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-info fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php"> Ir a inicio</a></li>
                <br>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./nivelJava.php">Ir a Javascript</a></li>
                <br>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./nivelHtml.php">Ir a HTML</a></li>
                <br>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../quiz/index.php">Pon a prueba tus abilidades!</a></li>
                <br>
                <br>
                <br>
                <br>
                <br>

                <?php

                if (isset($_SESSION['nombre'])) {
                    $nombreDeUsuario = $_SESSION['nombre'];
                ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../quiz/admin/cerrar-sesion.php">Cerrar session</a></li>
                <?php } ?>

            </ul>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">
            <small>Selecciona la dificultad</small>
        </h1>
        <br>
        <br>
        <br>
        <br>
        

        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/ilustracion-concepto-disenador-grafico-dibujo-independiente-espacio-trabajo-hogar_594665-2.jpg?w=2000" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="./css.php">Principiante</a>
                        </h4>
                        
                        <p class="card-text"> Nuestro emocionante curso de nivel básico de CSS te sumergirá en el fascinante mundo del diseño web. 
                            A lo largo de este curso, te guiaremos a través de los fundamentos esenciales de CSS, el lenguaje de hojas de estilo que da vida y estilo a las páginas web. 
                            Desde la manipulación de colores y fuentes hasta la creación de diseños atractivos y responsivos, este curso te proporcionará las bases sólidas que necesitas para convertirte en un maestro del diseño web.
                        </p>
                        
                        <a href="./css.php" class="btn btn-outline-info">Ir a los cursos</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">

                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/usuario-personaje-nina-mujer-sentada-casa-computadora-busqueda-informacion-busqueda-internet-linea-investigando-usando-concepto-computadora-ilustracion-plana-dibujos-animados_133260-1613.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <br>
                            <br>
                            <br>
                            <a href="#">Intermedio</a>
                        </h4>
                        <p class="card-text">En esta etapa, consolidarás los conocimientos básicos de CSS y te adentrarás en conceptos más avanzados que te permitirán crear sitios web con un estilo profesional y sofisticado.
                        En este nivel, profundizarás en las diferentes técnicas de diseño utilizando selectores avanzados. Aprenderás a apuntar a elementos específicos con mayor precisión y a 
                        utilizar selectores de atributos y pseudo-clases para aplicar estilos dinámicos según el estado de los elementos.</p>
                        <?php

                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                            <a href="#" class="btn btn-outline-info">Ir a los cursos</a>

                        <?php } else { ?>

                            <a href="#" class="btn btn-outline-info">Suscribite a los cursos</a>

                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">

                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/ilustracion-concepto-disenador-grafico-dibujo-independiente-espacio-trabajo-hogar_594665-1.jpg?w=2000" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Avanzado</a>
                        </h4>
                        <br>
                        <p class="card-text">Felicidades por llegar al nivel avanzado de CSS, en este nivel dominaras las animaciones y transiciones, utilizando keyframes y funciones de temporización avanzadas para crear efectos sorprendentes y fluidos. 
                            Además, aprenderás a optimizar estas animaciones para garantizar un rendimiento suave y una experiencia de usuario inigualable.</p>
                        <br>
                        <?php

                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                            <a href="../pagos2/contenido.php" class="btn btn-outline-info">pagar suscripcion</a>

                        <?php } else { ?>
                            <a href="../login.php" class="btn btn-outline-info">Suscribete a los cursos</a>

                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</body>
</html>