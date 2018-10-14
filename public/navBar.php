<div class="row justify-content-end">
  <div class="col-4">
    <nav class="nav nav-pills">
      <?php
      if ( isset($_SESSION['user']['nombre'])) {
        echo '<p class="nav-item nav-link">'.$_SESSION['user']['nombre'].'</p>';
        echo '<a class="nav-item nav-link" href="logout.php">Cerrar sesión</a>';
      } else { ?>
        <a class="nav-item nav-link" href="login.php">Iniciar sesión</a>
        <a class="nav-item nav-link" href="formulario.php">Registrarse</a>
      <?php } ?>
    </nav>
  </div>
</div>
