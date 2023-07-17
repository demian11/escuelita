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
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Elementos html</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Tamaño de letra</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Imagenes</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Enlaces</a></li>
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
                    <span class="text-primary">HTML!</span>
                </h1>
                <div class="subheading mb-5">
                    <!-- 
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                        -->
                </div>

                <p class="lead mb-5">En este curso, te introducirás en el fascinante mundo del desarrollo web y aprenderás los fundamentos del lenguaje HTML (HyperText Markup Language). HTML es el lenguaje de marcado estándar para crear páginas web y
                    es fundamental para cualquier aspirante a desarrollador web.
                    Durante el curso, exploraremos los conceptos básicos de HTML, desde la estructura básica de una página web hasta la creación de elementos como encabezados, párrafos, listas, enlaces e imágenes. Aprenderás cómo utilizar etiquetas HTML para organizar
                    y formatear el contenido de tus páginas, permitiéndote darle estilo y estructura a tus creaciones.</p>
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
                <h2 class="mb-5">Empecemos con el tutorial</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0"><!-- aqui puede ir texto--></h3>
                        <div class="subheading mb-3">Como podras observar en la siguiente imagen, aprenderas a crear tu prmer estructura de un html y te enlistaremos para que
                            funciona cada cosa de la pagina
                        </div>
                        <img src="../images/cuerpo.png" width="900" height="400">
                    </div>

                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0"></h3>
                        <h3 class="mb-0">Estructura de cada linea de codigo</h3>
                        <div class="subheading mb-3"><!-- aqui puede ir texto--></div>
                        <li><b>!DOCTYPE html:</b> Esto indica que el documento es un archivo HTML.</li>
                        <br>
                        <li><b>html lang="en":</b> El elemento html es la raíz de todo el documento HTML. El atributo lang establece el idioma del documento (en este caso, inglés).</li>
                        <br>
                        <li><b>head:</b> El elemento head contiene información sobre la página, como el título, enlaces a archivos CSS o JavaScript, metadatos y más.</li>
                        <br>
                        <li><b>meta charset="UTF-8":</b> Este metaetiqueta especifica la codificación de caracteres utilizada en el documento (UTF-8, en este caso).</li>
                        <br>
                        <li><b>meta http-equiv="X-UA-Compatible" content="IE=edge"</b> Esta metaetiqueta establece la compatibilidad con versiones anteriores de Internet Explorer.</li>
                        <br>
                        <li><b>meta name="viewport" content="width=device-width, initial-scale=1.0"</b>Esta metaetiqueta define la configuración de la ventana gráfica que se utiliza para mostrar el contenido en dispositivos móviles y otros dispositivos.</li>
                        <br>
                        <li><b>title Document /title:</b>El elemento title establece el título de la página que se mostrará en la barra de título del navegador.</li>
                        <br>
                        <li><b>body:</b>El elemento body contiene el contenido visible de la página, como texto, imágenes, enlaces y otros elementos.</li>
                        <h2></h2>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0"></h3>
                        <div class="subheading mb-3">Aqui te dejamos un cosejo </div>
                        <p>Para evitar escribir cada linea de codigo explicada anteriormente te recomendamos escribir en tu editor de codigo "!" y despues presionas tabulador para que instantaneamente escriba todo</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Web Design Intern</h3>
                        <div class="subheading mb-3">Shout! Media Productions</div>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Tamaños de letra</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h1 class="mb-0">
                            <"h1">Tu titulo<" /h1">
                        </h1>
                        <br>
                        <h2 class="mb-0">
                            <"h2">Aqui va tu subtitulo<" /h2">
                        </h2>
                        <br>
                        <h3 class="mb-0">
                            <"h3">Aqui va el contenido que quieras<" /h3">
                        </h3>
                        <br>
                        <h4 class="mb-0">
                            <"h4">Aqui va el contenido que quieras<" /h4">
                        </h4>
                        <br>
                        <h5 class="mb-0">
                            <"h5">Aqui va el contenido que quieras<" /h5">
                        </h5>
                        <br>
                        <br>
                        <br>
                        <div class="subheading mb-3">Como puedes ver aqui tienes varios tipos de tamaños de letras para tus paginas </div>
                        <div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">James Buchanan High School</h3>
                        <div class="subheading mb-3">Technology Magnet Program</div>
                        <p>GPA: 3.56</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Imagenes</h2>
                <div class="subheading mb-3">Para poder agregar imagenes en tu html necesitaras una etiqueta llamada img que se escribe de la siguiente forma:</div>
                <div class="subheading mb-3">
                    <"img src="" alt="">
                </div>
                <div class="subheading mb-3">El atributo <b>src</b> especifica la ruta o URL de la imagen que se mostrará.</div>
                <div class="subheading mb-3">El atributo <b>alt</b> proporciona un texto alternativo que se mostrará si la imagen no se carga correctamente o si el usuario utiliza un lector de pantalla. Este texto también es útil para mejorar la accesibilidad de la página y proporcionar información sobre la imagen.</div>
                <br>
                <img src="../images/img.png" width="900" height="400">
                <br>
                <br>
                <div class="subheading mb-3">Ademas si quieres darle el tamaño que quieras, puedes hacerlo de la siguiente manera como veras en estas imagenes de referencia</div>
                <div style="display: inline;">
                    <img src="../images/cafe.png" width="600" height="400">
                    <img src="../images/cafe.png" width="400" height="200">
                </div>
                <br>
                <br>
                <div class="subheading mb-3">Su codigo es de la siguiente manera, conmo puedes ver de la siguiente manera el <b>width</b> ayuda a darle el ancho de la imagen.</div>
                <div class="subheading mb-3">Para la etiqueta <b>width</b> height nos ayuda a darle la altura de la imagen </div>
                <img src="../images/img2.png" width="900" height="400">
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
                <h2 class="mb-5">Enlaces</h2>
                <div class="subheading mb-3">Los enlaces HTML son hipervínculos.
                    Puede hacer clic en un enlace y saltar a otro documento.
                    Cuando mueva el mouse sobre un enlace, la flecha del mouse se convertirá en una pequeña mano.</div>
                <div class="subheading mb-3">La etiqueta HTML <b>a</b> define un hipervínculo. Tiene la siguiente sintaxis</div>
                <br>
                <img src="../images/enalce.png" width="800" height="400">
                <br>
                <br>
                <div class="subheading mb-3">El atributo más importante del <b>a</b> elemento es el hrefatributo, que indica el destino del enlace.
                    El texto del enlace es la parte que será visible para el lector.
                    Al hacer clic en el texto del enlace, se enviará al lector a la dirección URL especificada.</div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Ir a jugar</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <h3><a href="../TemasJuego/index.html">Aqui completaras textos con la sintaxis del codigo anteriormente aprendido</a></h3>
                    </li>
                    <br>
                    <br>
                    <li>
                    <h2 class="mb-5">Hacer examen</h2>
                        <h3><a href="../quiz/index.php">En este examen veras un resumen de todos los temas anteriormente aprendiendo dentro de todos los cursos</a></h3>
                    </li>

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