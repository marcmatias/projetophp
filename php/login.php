<?php 

session_start();
mb_internal_encoding("UTF-8");
mb_http_output( "iso-8859-1" );
ob_start("mb_output_handler");
header("Content-Type: text/html; charset=ISO-8859-1",true);
// error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style media="screen">
      html,
      body {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
</head>
<body class="text-center">
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  <form method="post" class="form-signin">
      <img class="mb-4" src="../media/Phone-1.png" alt="" width="72" height="72">
      <p style="margin-top:-15px">Contatos Telefônicos</p>
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="username" class="sr-only">Usuário</label>
      <input id="username" name="username" type="text" class="form-control" placeholder="Usuário" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input id="password" name="password" type="password" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Login">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
  </form>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.dataTables.min.js"></script>
  <script src="../js/dataTables.bootstrap4.min.js"></script>
  <script src="../js/jquery.toaster.js"></script>
  <?php
    if (isset($_POST['submit'])){
      include("contato/conexao.php");
      $username=$_POST['username'];
      $password=$_POST['password'];
      // $_SESSION['login_user']=$username;
      $consulta = "SELECT username FROM login WHERE username='$username' and password='$password'";
      $executar_consulta = $conexao->query($consulta);
      if ($executar_consulta->fetch_assoc() != 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: ../index.php");
      }else{
        echo "<script type='text/javascript'>alert('Usuário e senha inválida!')</script>";
      }
      $conexao->close();
    }
  ?>
</body>
</html>
