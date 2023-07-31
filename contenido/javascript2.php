<?php

session_start();
include ".././quiz/admin/conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cursos de html</title>

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/EstiloJava.css" rel="stylesheet" />
        
    </head>

    <body id="page-top">
    <!--Barra de navegacion superior-->
    <!--el fixed top mantedra fija la barra superir que esta en la liena debajo de este comentario-->
    <nav class="navbar navbar-expand-sm navbar-primary bg-warning fixed-top justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../index.php">Inicio</a>
    </li>
    <li class=" nav-item ">
      <a class="nav-link " href="./nivelCSS.php">css</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./nivelHtml.php">Html</a>
    </li>
    
    <?php

if (isset($_SESSION['nombre'])) {
    $nombreDeUsuario = $_SESSION['nombre'];
?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['nombre'] ?></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="../quiz/admin/cerrar-sesion.php">cerrar sesion</a></li>
        </ul>
    </li>
<?php } else { ?>
    <li class="nav-item">
        <a class="nav-link" href="../login.php">Iniciar sesion</a>
    </li>
<?php } ?>
<!-- aqui termina para mostrar el usuario o iniciar sesion -->
</ul>
</nav>
<!--fi de Barra de navegacion superior-->

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-primary bg-warning fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">JAVASCRIPT</span>
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Presentacion</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Asincronismo y promesas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Funciones avanzadas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">fuciones flecha</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">constructores y prototipos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Clases</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Regrese al inicio del curso</a></li>

                    
                </ul>
            </div>
        </nav>

        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                    BIENVENIDO AL CURSO DE NIVEL
                        <span class="text-warning"> MEDIO DE JAVASCRIPT!</span>
                    </h1>
                    <div class="subheading mb-5">
                        <!-- 
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                        -->
                    </div>
                    
                    <p class="lead mb-5">En este nivel intermedio, exploraremos en profundidad cómo podemos utilizar JavaScript para crear interactividad
                        y funcionalidades más avanzadas en nuestros proyectos web.
                        
                    </p>
                    <div class="social-icons">
                    <!--
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    -->                  
                    </div>

                </div>
            </section>


            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2>¡Espera!</h2>
                    <div class="subheading mb-3">Los sitios web dínamicos necesitamos recordar información para mostrar o cambiar.Para<br>
                eso, JavaScript tiene valiables.<br>
                Al igual  que las cajas moviles ,las variables tienen contenido y nombres que nos dicen qué hay dentro.</div>
                    <div class="social-icons">
                    <a class="social-icon" href="https://codepen.io/pen/"><i class="fa-solid fa-code"></i></a>  <ul class="list-inline dev-icons"> <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                </div>
                    <br>
                    <br>
                    <br>
                    <h2 class="mb-5">Asincronismo y Promesas</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><!-- aqui puede ir texto--></h3>
                            <div class="subheading mb-3">El asincronismo es una parte fundamental de JavaScript y es esencial 
                                para trabajar con operaciones de red y otras tareas asíncronas.
                            </div>
                           
                        </div>
                        
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <h3 class="mb-0">Aqui tienes unos ejemplos de este tema</h3>
                            <div class="subheading mb-3"><!-- aqui puede ir texto--></div>
                            <li><b>Callbacks:</b> Comprenderás cómo funcionan los callbacks y cómo manejar operaciones asíncronas utilizando funciones de devolución de llamada.</li>
                            <br>
                            <li><b>Promesas:</b>  Introduciremos las promesas, que ofrecen una forma más elegante de manejar operaciones asíncronas y evitar el anidamiento excesivo de funciones.</li>
                            <br>
                            <li><b>Async/Await:</b>Aprenderás cómo utilizar async/await, una forma más moderna y legible de trabajar con operaciones asíncronas en JavaScript. </li>
                            <br>
                            <li><b>Constructores y Prototipos:</b> Aprenderás sobre constructores de objetos y cómo crear instancias de objetos a través de funciones constructoras. 
                            También entenderás cómo funcionan los prototipos y cómo heredar propiedades y métodos.</li>
                            <br>
                          
                            <h2></h2>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <div class="subheading mb-3"> </div>
                            <p></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <div class="subheading mb-3"></div>
                            <p></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"></span></div>
                    </div>
                </div>
            </section>

            

            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5"> Funciones Avanzadas</h2>
                    <div class="subheading mb-3">Las funciones de orden superior son funciones que pueden aceptar otras funciones como 
                        argumentos o devolver funciones como resultado. Estas funciones son poderosas y versátiles, y son ampliamente utilizadas en JavaScript. 
                        Un ejemplo común de una función de orden superior es Array.prototype.map(), que toma una función de transformación como argumento y devuelve un nuevo array con los 
                        resultados de aplicar esa función a cada elemento del array original.</div>
                    
                        <img src="../images/d.png" width="900" height="400">
                        </section>

                        <hr class="m-0" />
                    <!-- Awards-->
                    <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Funciones Flecha (Arrow Functions)</h2>
                    <div class="subheading mb-3">Las funciones flecha son una forma concisa de escribir funciones en JavaScript. Son especialmente útiles cuando necesitas mantener el valor de this en contextos específicos. 
                        Tienen una sintaxis más corta y clara en comparación con las funciones tradicionales.</div>
                        <img src="../images/d.png" width="900" height="400">
                        </section>
                        

                        
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5"> Constructores y Prototipos</h2>
                    <div class="subheading mb-3">En JavaScript, los objetos pueden ser creados usando funciones constructoras que actúan como plantillas para crear instancias de objetos con propiedades y métodos.
                         Además, los objetos en JavaScript pueden heredar 
                        propiedades y métodos de otros objetos utilizando prototipos.</div>
                    
                        <img src="../images/d.png" width="900" height="400">
                        </section>

                        <hr class="m-0" />
                    <!-- Awards-->
                    <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Clases</h2>
                    <div class="subheading mb-3">Con la introducción de ES6 (ECMAScript 2015), JavaScript ahora admite la creación de clases para crear objetos. 
                        Las clases son una forma más moderna y clara de definir objetos y sus métodos.</div>
                        <img src="../images/e.png" width="900" height="600">
                        </section>

                        <!-- Awards-->
        <section class="resume-section" id="juego">
            <div class="resume-section-content">
                <h2 class="mb-5">Antes de que te vallas, nos gustaria que pongas a prueba tus conocimientos </h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <h3><a href="../Juego4/">Aqui completaras textos con la sintaxis del codigo anteriormente aprendido</a></h3>
                    </li>
                    <br>
                    <br>
                    

                </ul>
            </div>
        </section>
                    
                  
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
