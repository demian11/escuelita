
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/login.css" rel="stylesheet">
  
    <title>Login</title>
</head>
<body>
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Name</a> -->

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
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">temas de interes</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#projects"></a>
                        </li>
                        -->
                        <!---->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="nivelHtml.php">Html</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="terms.html">CSS</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="privacy.html">JAVASCRIPT</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Iniciar sesion</a>
                        </li>
                    </ul>
                    <span class="nav-item social-icons">
                        <span class="fa-stack">
                            <a href="./quiz/admin/index.php">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

<div class="login-box">
  <h2>Registro</h2>
  <form>
     <div class="user-box">
      <input type="text" name="" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Correo</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Contraseña</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Entrar
    </a>
    <a href="./login.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrate
    </a>
  </form>
</div>
</body>
</html>