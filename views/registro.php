<div class="container">
  <div class="row">

    <div class="tab-pane fade" id="register">
      <h3 class="mb-4">Registrarse</h3>


      <?php
      include '../controller/conexion.php';
      if (isset($_POST['registrarse'])) {
        $identificacion = $_POST['identificacion'];
        $nombre = $_POST['nombre']; //escampar el input en una variable     
        $email = $_POST['email'];
        $password = $_POST['password'];
        $estado = "ACTIVO";
        $fechacreacion = date("Y-m-d");

        $insert = mysqli_query($con, "INSERT INTO empleados(nombre,identificacion,email,pasword,estado, fechacreacion)
          VALUES ('$nombre','$identificacion','$email','$password','$estado','$fechacreacion')");

        if ($insert) {
          echo '<div class="alert alert-succer" role="alert">
              DATOS GUARDADOS CON EXITO
              <a href="../index.php" class="btn btn-warning">REGRESAR AL INICIO </a>
              </div>';
        } else {
          echo "error al guardar";
        }
      }
      ?>
    </div>

    <form method="post">
      <div class="mb-3">
        <label for="registerName" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="registerName" placeholder="Nombre" name="nombre" required>
      </div>
      <div class="mb-3">
        <label for="registerEmail" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
      </div>
      <div class="mb-3">
        <label for="registerPassword" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="registerPassword" placeholder="Contraseña" name="password" required>
      </div>
      <div class="mb-3">
        <label for="registerIdentificacion" class="form-label">Identificacion</label>
        <input type="text" class="form-control" id="registerPassword" placeholder="Identificacion" name="identificacion" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary" name="registrarse">Registrarse</button>
      </div>
    </form>


    
  </div>
</div>
