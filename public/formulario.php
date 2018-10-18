<?php include 'validaciones.php' ?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method='POST'>
  <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" required id="nombre"
      <?php
      if ( ! empty($nombre) && ! empty($mail) && ! empty($pass)) {
        $reg = fopen('reg.txt', 'a+');
        fwrite($reg, $nombre+';'+$mail+';'+$pass);
        fclose($reg);
        echo '<h2>Gracias por registrarte</h2>';
      }
      $user;
      $mail;
      $pass;
      if ( ! empty($_POST['nombre']) ) {
        if (esNombre($_POST['nombre']) != true){
          echo 'value="'.$_POST['nombre'].'">';
          echo '<span class="errorf">'.esNombre($_POST['nombre']).'</span';
        } else {
          $user = $_POST['nombre'];
        }
      }
      ?>
      >
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" required id="email"
      <?php
      if ( ! empty($_POST['email']) ) {
        if (esEmail($_POST['email']) != true){
          echo 'value="'.$_POST['email'].'">';
          echo '<span class="errorf">'.esEmail($_POST['email']).'</span';
        } else {
          $mail = $_POST['email'];
        }
      }
      ?>
      >
    </div>
  </div>

  <div class="form-group row">
    <label for="passwd" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" required id="passwd"
      <?php
      if ( ! empty($_POST['passwd']) ) {
        if (esPasswd($_POST['passwd']) != true){
          echo 'value="'.$_POST['passwd'].'">';
          echo '<span class="errorf">'.esPasswd($_POST['passwd']).'</span';
        } else {
          $pass = $_POST['passwd'];
        }
      }
      ?>
      >
    </div>
  </div>
  <button type="submit" class="btn" name="button">Enviar</button>
</form>
