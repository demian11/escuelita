<?php
include "./quiz/admin/conexion.php";
error_reporting(0);
session_start();
//el registro funciona sin problemas
if(isset($_SESSION["nombre"]))
{
    header("location: ./index.php");
}

if(isset($_POST["submit"])){
    $username=$_POST["nombre"];
    $email=$_POST["correo"];
    $password=md5($_POST["password"]);
    $cpassword= md5($_POST["cpassword"]);

    if($password==$cpassword){
        $sql="SELECT * FROM usuarios WHERE
        correo = '$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){

            $sql ="INSERT INTO usuarios
            (nombre,correo,clave)
            VALUE ('$username','$email','$password')";
            $result=mysqli_query($conn,$sql);

            if($result){
                echo "<script>alert('Usuario registrado correctamente')</script>";
            }

        }else{
            echo"<script>alert('El correo ya existe')</script>";
        }
    }else{
        echo"<script>alert('La contaseña no coincide')</script>";
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="./css/login.css" rel="stylesheet">
  
    <title>Login</title>
</head>
<body>

<div class="login-box">
  <h2>Registro</h2>
  <form action="" method="POST" class="login-email">
     <div class="user-box">
      <input type="text" name="nombre" value="<?php echo $username; ?>" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="text" name="correo" value="<?php echo $email; ?>" required="">
      <label>Correo</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" value="<?php echo $_POST['$password']; ?>" required="">
      <label>Contraseña</label>
    </div>
    <div class="user-box">
      <input type="password" name="cpassword" value="<?php echo $_POST['$cpassword']; ?>" required="">
      <label>Confirmar contraseña</label>
    </div>
    <button href="#" name="submit" class="btn btn-outline-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registarme
    </button>
    <button onclick="window.location.href='./login.php'" class="btn btn-outline-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Ir a iniciar sesion
    </a>
  </form>
</div>
</body>
</html>