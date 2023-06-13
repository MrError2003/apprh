<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>


<div class="tab-pane fade" id="register">
  <h3 class="mb-4">Registrarse</h3>

  <?php
  include '../controller/conexion.php';
  if (isset($_POST['registrarse'])) {
    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = mysqli_query($con, "INSERT INTO usuariosnomina(nombre,identificacion,email,pasword,estado, fechacreacion)
          VALUES ('$identificacion','$email','$password')");

    if ($insert) {
      echo '<div class="alert alert-success" role="alert">
              DATOS GUARDADOS CON ÉXITO
              <a href="../index.php" class="btn btn-warning">REGRESAR AL INICIO </a>
              </div>';
    } else {
      echo "Error al guardar";
    }
  }
  ?>
</div>

<body>
  <div class="container">
    <form method="post">
      <div class="mb-3">
        <label for="registerIdentificacion" class="form-label">Identificación</label>
        <input type="text" class="form-control" id="registerIdentificacion" placeholder="Identificación" name="identificacion" required>
      </div>
      <div class="mb-3">
        <label for="registerEmail" class="form-label">Email corporativo</label>
        <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
      </div>
      <div class="mb-3">
        <label for="registerPassword" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="registerPassword" placeholder="Contraseña" name="password" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary" name="registrarse">Registro Usuario nómina</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>