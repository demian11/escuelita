<?php
include "./quiz/admin/conexion.php";
session_start();
error_reporting(0);

if(isset($_SESSION["nombre"])){
  header('Location:./index.php');
}

if(isset($_POST["submit"])){
  $email=$_POST["correo"];
  $password=md5($_POST["password"]);

  $sql="SELECT * FROM usuarios WHERE 
  correo='$email' AND clave='$password'";
  $result = mysqli_query($conn,$sql);

  if($result-> num_rows > 0){
    $row =mysqli_fetch_assoc($result);
    $_SESSION['nombre']=$row['nombre'];
    header('Location:./index.php');
  }else{
    echo "<script>alert('La contraseña o el correo son incorrectos')</script>";
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
  <h2>Iniciar sesion</h2>

  <form action="" method="POST" class="login-email">
     <div class="user-box">
      <input type="text" name="correo" value="<?php echo $email; ?>" required="">
      <label>Correo</label>
    </div>

    <div class="user-box">
      <input type="password" name="password" value="<?php echo $_POST['$password']; ?>" required="">
      <label>Contraseña</label>
    </div>

    <button href="#" name="submit" class="btn btn-outline-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Entrar
    </button>
    
    <button onclick="window.location.href='./register.php'" class="btn btn-outline-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Ir a Registrate
    </button>
  </form>
</div>
</form>
</body>
</html>