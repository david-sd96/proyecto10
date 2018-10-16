<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login en Indice</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="passwd" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="passwd" placeholder="Contraseña">
        </div>
      </div>
    </form>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
  </body>
</html>
