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
        <br>
        <br>

        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="../images/nivel1.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="./html1.php">Principiante</a>
                        </h4>
                        <p class="card-text">En este nivel empezaras aprender lo basico de html en donde
                            conoceras conceptos basicos como, crear la estructura basica de tu pagina,
                            como darle tamaño a tus textos, agregar imagenes y demas
                        </p>
                        <a href="./html1.php" class="btn btn-primary">Ir a los cursos</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">

                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://previews.123rf.com/images/sensvector/sensvector2101/sensvector210100068/163303513-personaje-masculino-concentrado-en-el-proyecto-de-trabajo-hombre-aislado-codificando-y-programando.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Intermedio</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod
                            odio, gravida pellentesque urna varius vitae.</p>
                        <?php

                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                            <a href="#" class="btn btn-primary">Ir a los cursos</a>

                        <?php } else { ?>

                            <a href="#" class="btn btn-primary">Suscribite a los cursos</a>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- end of header-content 
                            ░░░█████░░░░░░░░
                            ░░░█▓▓▒▓▓██░░░░░
                            ░░░█▓▒▒▒▓▓▓█░░░░
                            ░░███████▓▓▓█░░░░
                            ░██████████▓▓█░░░
                            ░███████████▓▓█░░
                            ░░██░░▒░░▒██▓██░░
                            ░░░█░█▒█░▒▒██▒▒█░
                            ░░█▒░█▒█░▒▒██▒▒█░
                            ░░█▒▒▒▒▒▒▒██▒▒▒█░
                            ░░█▒▒▒▒██▒▒█▒▒▒█░
                            ░░███████▒▒▒██░░
                            ░░██████▒▒▒▒██░░░
                            ░░░░█▒▒▒▒▒▒██░░░
                            ░░░░░██████░
	 -->

            <div class="col-lg-4 col-sm-6 mb-4">

                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://img.freepik.com/vector-premium/codificador-habil-monitores-gadgets-personaje-masculino-que-desarrolla-sitios-web-codifica-programacion_316839-1306.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Avanzado</a>
                        </h4>
                        <p class="card-text">Dentro de este curso empezaras a crear tu propio proyecto
                            de forma profecional y funcional, con el cual podras demostrar tus conociminentos
                            previamente aprendidos en los anteriores cursos
                        </p>
                        <?php

                        if (isset($_SESSION['nombre'])) {
                            $nombreDeUsuario = $_SESSION['nombre'];
                        ?>
                            <a href="#" class="btn btn-primary">Ir a los cursos</a>

                        <?php } else { ?>
                            <a href="#" class="btn btn-primary">Suscribete a los cursos</a>

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