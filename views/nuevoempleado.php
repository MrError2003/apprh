<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro nuevo empleado</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container bg-white py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="tab-pane fade" id="register">
          <h3 class="mb-4">Registro nuevo empleado</h3>

          <?php
          include '../controller/conexion.php';

          if (isset($_POST['registrar'])) {
            $tipodocumento = $_POST['tipodocumendo'];
            $identificacion = $_POST['documento'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $cargo = $_POST['cargo'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $telefonocontacto = $_POST['contacto'];
            $direccion = $_POST['direccion'];
            $barrio = $_POST['barrio'];
            $municipiociudad = $_POST['municipiociudad'];
            $departamento = $_POST['departamento'];
            $eps = $_POST['eps'];
            $arl = $_POST['arl'];
            $cajacompensacion = $_POST['cajacompensacion'];
            $pension = $_POST['pension'];
            $fechaingreso = $_POST['ingreso'];
            $fechacreacion = date("Y-m-d");
            $estado = "ACTIVO";

            $insert = mysqli_query($con, "INSERT INTO empleados (tipodocumento, identificacion, nombres, apellidos, cargo, email, telefono, telefonocontacto, direccion, barrio, municipiociudad, departamento, eps, arl, cajacompensacion, pension, fechaingreso, fechacreacion, estado)
                           VALUES ('$tipodocumento', '$identificacion', '$nombres', '$apellidos', '$cargo', '$email', '$telefono', '$telefonocontacto', '$direccion', '$barrio', '$municipiociudad', '$departamento', '$eps', '$arl', '$cajacompensacion', '$pension', '$fechaingreso', '$fechacreacion', '$estado')");
            if ($insert) {
              echo '<div class="alert alert-success" role="alert">
                  DATOS GUARDADOS CON ÉXITO
                  <a href="../index.php" class="btn btn-warning">REGRESAR AL INICIO</a>
                </div>';
            } else {
              echo "Error al guardar los datos: " . mysqli_error($con);
            }
          }

          mysqli_close($con);
          ?>

        </div>

        <form method="post">
          <div class="mb-3">
            <label for="registerTypedoc" class="form-label">Tipo documento</label>
            <input type="text" class="form-control" id="registerTypedoc" placeholder="CC, TI, CE" name="tipodocumendo" required>
          </div>
          <div class="mb-3">
            <label for="registerDoc" class="form-label">Número documento</label>
            <input type="text" class="form-control" id="registerDoc" placeholder="Número documento" name="documento" required>
          </div>
          <div class="mb-3">
            <label for="registerNames" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="registerNames" placeholder="Nombres" name="nombres" required>
          </div>
          <div class="mb-3">
            <label for="registerSecondsname" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="registerSecondsname" placeholder="Apellidos" name="apellidos" required>
          </div>
          <div class="mb-3">
            <label for="registerCarge" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="registerCarge" placeholder="Cargo" name="cargo" required>
          </div>
          <div class="mb-3">
            <label for="registerEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
          </div>
          <div class="mb-3">
            <label for="registerTel" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="registerTel" placeholder="Teléfono" name="telefono" required>
          </div>
          <div class="mb-3">
            <label for="registerContactphone" class="form-label">Teléfono de contacto</label>
            <input type="text" class="form-control" id="registerContactphone" placeholder="Tel. Contacto" name="contacto" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="address" placeholder="Dirección de residencia" name="direccion" required>
          </div>
          <div class="mb-3">
            <label for="neighborhood" class="form-label">Barrio</label>
            <input type="text" class="form-control" id="neighborhood" placeholder="Barrio" name="barrio" required>
          </div>
          <div class="mb-3">
            <label for="city" class="form-label">Municipio o ciudad</label>
            <input type="text" class="form-control" id="city" placeholder="Lugar de residencia" name="municipiociudad" required>
          </div>
          <div class="mb-3">
            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="departamento" placeholder="Departamento de residencia" name="departamento" required>
          </div>
          <div class="mb-3">
            <label for="registerEPS" class="form-label">EPS</label>
            <input type="text" class="form-control" id="registerEPS" placeholder="Nombre EPS" name="eps" required>
          </div>
          <div class="mb-3">
            <label for="registerARL" class="form-label">ARL</label>
            <input type="text" class="form-control" id="registerARL" placeholder="Nombre ARL" name="arl" required>
          </div>
          <div class="mb-3">
            <label for="registerCaja" class="form-label">Caja compensación</label>
            <input type="text" class="form-control" id="registerCaja" placeholder="Caja compensación" name="cajacompensacion" required>
          </div>
          <div class="mb-3">
            <label for="registerPension" class="form-label">Fondo de pensión</label>
            <input type="text" class="form-control" id="registerPension" placeholder="Fondo pensión" name="pension" required>
          </div>
          <div class="mb-3">
            <label for="dateadmission" class="form-label">Fecha Ingreso</label>
            <input type="date" class="form-control" id="dateadmission" placeholder="Fecha de ingreso" name="ingreso" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
