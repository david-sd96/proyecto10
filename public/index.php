<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <?php include 'navBar.php' ?>
    <?php if ( ! empty($_SESSION['user']['nombre']) ) { ?>
      <h1>Bienvenido</h1>
    <?php } else { ?>
      <p>Registrate o inicia sesión para acceder al contenido.</p>
  <?php  }?>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.js"></script>
  </body>
</html>
