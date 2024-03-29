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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php"> Ir a inicio</a></li>
                <br>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./nivelHtml.php">Ir a HTML</a></li>
                <br>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./nivelCSS.php">Ir a CSS</a></li>
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
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/personaje-pensamiento-diseno-plano-elementos-alrededor_23-2148270055.jpg?w=2000" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="./javascript.php">Principiante</a>
                        </h4>
                        <p class="card-text">Dentro de este curso básico aprenderás lo básico de JavaScript en donde conocerás la forma 
                            en darle interactividad a tu paginas web, 
                            dentro de este curso aprenderás a declarar variables, hacer funciones y mas.
                        </p>
                        <a href="./javascript.php" class="btn btn-dark">Ir a los cursos</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">

                <div class="card h-100">
                    <br>
                    <br>
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/concepto-desarrollo-web-escena-personas-diseno-plano-hombre-programando-escribiendo-pruebas-codigo-corrigiendo-errores-funciona-diferentes-pantallas-ilustracion-vectorial-situacion-personaje-web_9209-10313.jpg?w=2000" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                        <br>
                        <br>
                        <br>
                            <a href="#">Intermedio</a>
                        </h4>
                        <p class="card-text">Para el curso intermedio conocerás temas con los que aprenderás a darle una mejor estructura a tu código, 
                            así como hacer tu código mas eficiente con la finalidad de puedas manipularlo de mejor manera y manejar correctamente los datos.</p>
                        <?php

                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                            <a href="./javascript2.php" class="btn btn-dark">Ir a los cursos</a>

                        <?php } else { ?>

                            <a href="../login.php" class="btn btn-dark">Suscribite a los cursos</a>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- end of header-content  -->

            <div class="col-lg-4 col-sm-6 mb-4">

                <div class="card h-100">
                    <br>
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/concepto-software-programacion-situacion-personaje-hombre-que-trabaja-codigo-programa-computadora-portatil-que-corrige-errores-prueba-optimizacion-ilustracion-vectorial-escena-personas-diseno-plano-web_9209-11400.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <br>
                            <br>
                            <a href="#">Avanzado</a>
                        </h4>
                        <p class="card-text">Por ultimo y para finalizar tus cursos de JavaScript usaras todo lo aprendido dentro de los anteriores cursos y crearas un pequeño proyecto en el cual lo implementaras en tu pagina web, 
                            con la finalidad que puedas ver el funcionamiento correcto de cada tema aprendido del curso.
                        </p>
                        <?php

                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                            <a href="../pagos2/contenido.php" class="btn btn-dark">Pagar suscripcion</a>

                        <?php } else { ?>
                            <a href="../login.php" class="btn btn-dark">Suscribite a los cursos</a>

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