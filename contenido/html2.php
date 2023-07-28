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
    <link href="../css/style.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!--Barra de navegacion superior-->
    <!--el fixed top mantedra fija la barra superir que esta en la liena debajo de este comentario-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Inicio</a>
            </li>
            <li class=" nav-item ">
                <a class="nav-link " href="../contenido/nivelCSS.php">css</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contenido/nivelJava.php">javascript</a>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <!-- <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/html.jpg" alt="..." /></span>-->

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Presentacion</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Etiquetas semanticas</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Formulario avanzado</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Elementos interactivos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Elementos Multimedia</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">juegos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Regresar</a></li>

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
                    <span class="text-primary">HTML INERMEDIO</span>
                </h1>
                <div class="subheading mb-5">
                    <!-- 
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                        -->
                </div>

                <p class="lead mb-5">En este curso de nivel medio de HTML, profundizaremos en el lenguaje de marcado para la creación de páginas web. Asumimos que ya tienes conocimientos básicos de HTML. 
                    Aprenderemos sobre etiquetas más avanzadas y cómo aplicarlas correctamente en diferentes situaciones.</p>
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
                <div class="subheading mb-3">Antes de que empieces con este curso te recomendamos primero que tengas listo un editor de codigo
                    y para eso te daremos uno para que pudas dar tus primeros pasos dentro de la programacion, asi que picale al siguiente boton y empieza a programar!</div>
                <div class="social-icons">
                    <a class="social-icon" href="https://codepen.io/pen/"><i class="fa-solid fa-code"></i></a>
                </div>
                <br>
                <br>
                <br>
                <h2 class="mb-5">Comencemos con nustro curos</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Etiquetas Semánticas</h3>
                        <div class="subheading mb-3">Las etiquetas semánticas en HTML son importantes para proporcionar significado y estructura al contenido. 
                            Aprenderemos sobre las siguientes etiquetas:
                        </div>
                        
                    </div>

                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0"></h3>
                        <h3 class="mb-0">Estructura de cada etiqueta</h3>
                        <div class="subheading mb-3"><!-- aqui puede ir texto--></div>
                        <li><b><'header>:</b>  Define el encabezado de una sección o el documento completo.</li>
                        <br>
                        <li><b><'nav>:</b> Define una barra de navegación.</li>
                        <br>
                        <li><b><'main>:</b> Define el contenido principal de una página.</li>
                        <br>
                        <li><b><'section>:</b> Define una sección de contenido relacionado.</li>
                        <br>
                        <li><b><'article>:</b> Define un contenido independiente que puede ser reutilizable, como una publicación de blog.</li>
                        <br>
                        <li><b><'aside>:</b>Define contenido secundario o complementario, como una barra lateral.</li>
                        <br>
                        <li><b><'footer>:</b>Define el pie de página de una página o sección.</li>
                        
                        <br>
                        <img src="../images/a.png" width="700" height="400">
                        <!-- 
                        <a href="#"><button type="button" class="btn btn-primary btn-block">Ver el resultado final</button></a>
                        -->
                    </div>
                   
                </div>
                <!-- 
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0"></h3>
                        <div class="subheading mb-3">Aqui te dejamos un cosejo </div>
                        <p>Para evitar escribir cada linea de codigo explicada anteriormente te recomendamos escribir en tu editor de codigo "!" y despues presionas tabulador para que instantaneamente escriba todo</p>
                    </div>
                  
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Web Design Intern</h3>
                        <div class="subheading mb-3">Shout! Media Productions</div>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                    </div>
                     -->
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Formulario avanzado</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                       
                        <div class="subheading mb-3">En esta lección, profundizaremos en el 
                            uso de formularios y cómo trabajar con elementos más avanzados.
                        </div>
                        
                        <br>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        <h3 class="mb-0"></h3>
                        <h3 class="mb-0"><!-- aqui puede ir texto--></h3>
                        <div class="subheading mb-3"><!-- aqui puede ir texto--></div>
                        <li><b><'label>:</b> Para etiquetar controles de formulario y mejorar la accesibilidad..</li>
                        <br>
                        <li><b><'textarea> y <'option>:</b> Para crear áreas de texto de varias líneas..</li>
                        <br>
                        <li><b><'input>:</b> Para crear listas desplegables o selectores de opciones..</li>
                        <br>
                        <img src="../images/b.png" width="900" height="400">
                        <!-- 
                        <a href="#"><button type="button" class="btn btn-primary btn-block">Ver el resultado final</button></a>
                        -->
                    </div>
                   
                </div>
                    </div>
                    
                </div>
                <!-- 
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">James Buchanan High School</h3>
                        <div class="subheading mb-3">Technology Magnet Program</div>
                        <p>GPA: 3.56</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                </div>
                    -->
            </div>
        </section>

        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Elementos interactivo</h2>
                <div class="subheading mb-3">En esta lección, veremos cómo crear elementos interactivos en una página web.</div>
                <li><b><'label>:</b> Para etiquetar controles de formulario y mejorar la accesibilidad..</li>
                        <br>
                        <li><b><'textarea> y <'option>:</b> Para crear áreas de texto de varias líneas..</li>
                        <br>
                        <li><b><'input>:</b> Para crear listas desplegables o selectores de opciones..</li>
                        <br>
                        <li><b><'meta>:</b> Para proporcionar metadatos como descripciones y palabras clave.</li>
                        <br>
                        <li><b><'title>:</b> Para establecer el título de la página web.</li>
                        <img src="../images/b.png" width="900" height="400">
                <!-- Interests
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                    <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                    <li class="list-inline-item"><i class="fab fa-react"></i></li>
                    <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                    <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                    <li class="list-inline-item"><i class="fab fa-less"></i></li>
                    <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                    <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                    <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                </ul>
                
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Functional Teams
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Agile Development & Scrum
                    </li>
                </ul>
                -->
            </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Multimedia</h2>
                <div class="subheading mb-3">En esta lección, exploraremos cómo incrustar contenido multimedia en una página web.</div>
               
                
                        <li><b><'img>:</b> se utiliza para mostrar imágenes en una página web. Es un elemento vacío, lo que significa que no tiene etiqueta de cierre, y solo requiere el atributo src que especifica la ruta de la imagen que se va a mostrar.</li>
                        <br>
                        <li><b><'video>:</b> se utiliza para incrustar videos en una página web. Puedes especificar diferentes formatos de video usando elementos <'source> dentro de la etiqueta <'video>. Así, el navegador elegirá el formato compatible más adecuado.</li>
                        <br>
                        <li><b><'audio>:</b> se utiliza para incrustar contenido de audio en una página web. Al igual que con el elemento <'video>, puedes especificar diferentes formatos de audio usando elementos <'source>.</li>
                        <br>
                        <li><b><'iframe>:</b> se utiliza para incrustar contenido externo, como mapas de Google, videos de YouTube u otras páginas web, dentro de una página web.</li>
                        <br>
                        <img src="../images/c.png" width="800" height="400">
                <br>
                <br>
                <br>
                <div class="subheading mb-3">Aqui te dejamos unos ejemplos de estas etiquetas</div>
                <div class="subheading mb-3"><b>Este es un ejemplo del iframe donde podras visualizar contenido externo </b></div>
                <iframe src="https://www.pexels.com/es-es/" frameborder="0" width="800" height="400"></iframe>
                    <br>
                    <br>
                    <div class="subheading mb-3"><b>Este es un ejemplo de la etiqueta video con la podras poner videos para tu pagina </b></div>
                    <video autoplay loop muted src="../images/header-background-video.mp4"  width="800" height="400"></video>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Antes de que te vallas, nos gustaria que pongas a prueba tus conocimientos </h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <h3><a href="../TemasJuego/index.html">Aqui completaras textos con la sintaxis del codigo anteriormente aprendido</a></h3>
                    </li>
                    <br>
                   

                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
</body>

</html>