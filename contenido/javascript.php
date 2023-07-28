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
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning fixed-top justify-content-center">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">JAVASCRIPT</span>
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Presentacion</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Creacion de variables</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Cadenas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills"></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">let y const</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Instrucciones</a></li>
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
                        Bienvenido a los cursos de
                        <span class="text-warning">JAVASCRIPT!</span>
                    </h1>
                    <div class="subheading mb-5">
                        <!-- 
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                        -->
                    </div>
                    
                    <p class="lead mb-5">Ahora que nos hemos sumerguido en como estructurar y diseñar paginas web, echemos 
                        un vistazo a lo que nesecitamospara hacerlas interactivas.
                        <br>
                        Analizaremos en profundidad Javascript, un <strong>lenguaje de programacion</strong> que impulsa sitio
                        web y aplicaciones dinamicos.
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
                    <h2 class="mb-5">Conceptos básicos de JavaScript</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><!-- aqui puede ir texto--></h3>
                            <div class="subheading mb-3">Como podras observar en la siguiente imagen, aprenderas a crear tu prmer estructura de un html y te enlistaremos para que
                                funciona cada cosa de la pagina
                            </div>
                            <img src="../images/ejemjava.png" width="900" height="400" >
                        </div>
                        
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"></h3>
                            <h3 class="mb-0">Creacion de variables.</h3>
                            <div class="subheading mb-3"><!-- aqui puede ir texto--></div>
                            <li><b>let y const:</b> Usamos <b>let</b> y <b>const</b>para crear variables,cubriremos la riferencia entre ellos mas adelante.</li>
                            <br>
                            <li><b>Nombre:</b> Toda variable nesecita un <b>nombre</b>. <br>
                            Los nombres de las variables deben ser palabras sueltas y, por lo tanto, no deben tener espacios.</li>
                            <br>
                            <li>Ejemplo: let <b>city</b> </li>
                            <br>
                            <li><b>Camel case:</b> Para crear nombres de variables con varias palabras, usamos <b>camel case</b>. <br>
                            Empezamos con una letra minúscula y ponemos una mayúscula las palabras adicionales</li>
                            <br>
                            <li>Ejemplo: let <b>homeCity</b></li>
                            <br>
                            <li>Para ayudarnos a comprender qué hay dentro de una variable, elegimos <b>nombres descriptivos</b>. </li>
                            <br>
                            <li>Ejemplo: const <b>windyCity</b></li>
                            <br>
                            <li>Los nombres de variables tambien pueden contener <b>números</b> . Sumar números es útil con múltiples cariables similares.</li>
                            <br>
                            <li>Ejemplo: const <b>car1</b></li>
                            <br>
                            <li>Después de crear y nombran una variable,ussamos elsigno = para almacenar un <b>valor dentro de ella</b>.</li>
                            <br>
                            <li>Ejemplo: const city <b>=</b> "Chicago"</li>
                            <br>
                            <li>Para terminar de crear una variable , ponemos un punto y coma, <b>;</b> ,al final de la linea.</li>
                            <br>
                            <li>Ejemplo: const city = "Chicago"<b>;</b></li>
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
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Cadenas</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        <li>Los varoles que hemos estado almacenando son <b>cadenas</b>. Las cadenas  son palabras entre comillas dobles.</li>
                            <br>
                            <li>Ejemplo:<b>"Chicago"</b></li>
                            <br>
                            <li>Las cadenas pueden contener todo tipo de letras y símbolos,incluidos espacios.</li>
                            <br>
                            <li>Ejemplo:<b>"Winter is coming"</b></li>
                            <br>
                    
            <!-- Skills-->
            <section class="resume-section" id="Const">
                <div class="resume-section-content">
                    <h2 class="mb-5">Let y Const</h2>
                    <div class="subheading mb-3"></div>
                    
                        <!-- <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>-->
                        <li>Usamos <b>const</b> para declarear variables cuyos valores se supone que no deben cambiar,const es una abreviatura de ce "constante".</li>
                            <br>
                            <li>Ejemplo: <b>const</b> norwayCapital = "Oslo"; </li>
                            <br>
                            <li>Para que sea obvio que una variable es de tipo <b>const</b> y no debe cambiar,opcionalmente podemosnombrarla con letras mayúsculas.</li>
                            <br>
                            <li>Ejemplo: const <b>BIRTHDAY</b> = "05/08/1995"; </li>
                            <br>
                            <li>No podemos usar <b>camelCase</b>si usamos este estándar en mayúsculas,por lo que usamos mayúsculas <b>snake_case</b><br>
                             para nombrar variables con más de una palabra.</li>
                            <br>
                            <li>Ejemplo: const <b>SPEED_OF_LIGTH</b> = "299 792 458 m/s"; </li>
                            <br>
                            <li>Ambas  <b>let y const</b> son variables útiles y podríamos usarlas indistintamente. Sin embargo,<br>
                            deberíamos intentar utilizar <b>const</b>. por defecto. </li>
                            <br>
                            <li>Ejemplo: const <b>SPEED_OF_LIGTH</b> = "299 792 458 m/s"; </li>
                            <br>
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Instrucciones</h2>


                    <li>Las lineas de código son <b>instrucciones</b>que debe seguir la computadora <br>
                Cuando ejecutamos el código, le decimos a la computadora que siga las instrucciones que reunimos.</li>
                            <br>
                            <br>
                            <li>El orden de las instrucciones importa porque la comuputadora sigue las instrucciones línea por línea.</li>
                            <br>
                            <li>Ejemplo:<br>
                             const <b>step1</b> = "Collect pants";  <br>   
                        const <b>step2</b> = "?"; <br> 
                        const <b>step3</b> = "Profit"; </li>
                            <br>
                            <li>Con la instruccion especial <b>console log().</b>le decimos a la computadora que muestre un valor en un área llamada <b>consola.</b></li>
                            <br>
                            <li>Ejemplo: <p>console.log("Hello world");</p></li>
                            <br>
                            <li>Podemos usar la instruccion <b>console.log()</b> tantas veces como queramos.La computadora  muestra cada valor en una linea en consola.</li>
                            <br>
                            <li>Ejemplo:  <br>
                             <b>console.log("3,2,1");</b> <br>
                            <b>console.log("GO!");</b></li>
                            <br>
                            <li>Cuando mostramos variables en la consola,sus valores aparecen en un lugar de sus nombres.</li>
                            <br>
                            const <b>name</b> = "Daenerys"; <br> 
                            <p>console.log(<b>name</b>);</p></li></li>
                            <br>
                  
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
