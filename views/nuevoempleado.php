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
                <label for="registerName" class="form-label">Tipo documento</label>
                <input type="text" class="form-control" id="registerTypedoc" placeholder="CC, TI, CE" name="tipodocumendo" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Numero documento</label>
                <input type="text" class="form-control" id="registerDoc" placeholder="Numerio documento" name="documento" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="registerNames" placeholder="Nombre" name="nombres" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="registerSecondsname" placeholder="Apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="registerCarge" placeholder="Cargo" name="cargo" required>
            </div>
            <div class="mb-3">
                <label for="registerEmail" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="registerTel" placeholder="Telefono" name="nombres" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Telefono Contacto</label>
                <input type="text" class="form-control" id="registerContactphone" placeholder="Tel. Contacto" name="contacto" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">EPS</label>
                <input type="text" class="form-control" id="registerEPS" placeholder="Nombre EPS" name="eps" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">ARL</label>
                <input type="text" class="form-control" id="registerARL" placeholder="Nombre ARL" name="arl" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Caja compensación</label>
                <input type="text" class="form-control" id="registerCaja" placeholder="Caja compensación" name="cajacompensacion" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Fondo de pensión</label>
                <input type="text" class="form-control" id="registerPension" placeholder="Fondo pensión" name="pension" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Fecha Ingreso</label>
                <input type="date" class="form-control" id="dateadmission" placeholder="Fecha de ingreso" name="ingreso" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="registrarse">Registrarse</button>
            </div>
        </form>



    </div>
</div>