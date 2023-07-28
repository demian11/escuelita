<?php

session_start();
include "../quiz/admin/conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined"></span> ProgFun
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>
        <br>
        <br>
        <br>
        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="../index.php">
              <span class="material-icons-outlined">home</span> Inico
            </a>
          </li>
          <br>

          <?php  
             if (isset($_SESSION['nombre'])) {
              $nombreDeUsuario = $_SESSION['nombre'];
               ?>

          <li class="sidebar-list-item">
            <a href="../quiz/admin/cerrar-sesion.php">
              <span class="material-icons-outlined">logout</span> Cerrar sesion
            </a>
          </li>
          <?php } ?>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <h3>Usuarios suscritos</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>100</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>Ususarios en html</h3>
              <span class="material-icons-outlined">html</span>
            </div>
            <h1>55</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>usuarios en css</h3>
              <span class="material-icons-outlined">css</span>
            </div>
            <h1>30</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>usuarios en javascript</h3>
              <span class="material-icons-outlined">javascript</span>
            </div>
            <h1>15</h1>
          </div>

        </div>

        <div class="charts">
          <!--grafica de la izquierda de la pantalla-->
          <div class="charts-card">
            <h2 class="chart-title">Los curos mas visitados</h2>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Crecimiento de usuarios por mes</h2>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>