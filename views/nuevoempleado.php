<div class="container">
    <div class="row">

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
                $eps = $_POST['eps'];
                $arl = $_POST['arl'];
                $cajacompensacion = $_POST['cajacompensacion'];
                $pension = $_POST['pension'];
                $fechaingreso = $_POST['ingreso'];
                $fechacreacion = date("Y-m-d");
                $estado = "ACTIVO";

                $insert = mysqli_query($con, "INSERT INTO empleados (tipodocumento, identificacion, nombres, apellidos, cargo, email, telefono, telefonocontacto, eps, arl, cajacompensacion, pension, fechaingreso, fechacreacion, estado)
                                 VALUES ('$tipodocumento', '$identificacion', '$nombres', '$apellidos', '$cargo', '$email', '$telefono', '$telefonocontacto', '$eps', '$arl', '$cajacompensacion', '$pension', '$fechaingreso', '$fechacreacion', '$estado')");

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
                <label for="registerName" class="form-label">Tipo documento</label>
                <br>
                <input type="text" class="form-control" id="registerTypedoc" placeholder="CC, TI, CE" name="tipodocumendo" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Numero documento</label>
                <br>
                <input type="text" class="form-control" id="registerDoc" placeholder="Numerio documento" name="documento" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Nombres</label>
                <br>
                <input type="text" class="form-control" id="registerNames" placeholder="Nombres" name="nombres" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Apellidos</label>
                <br>
                <input type="text" class="form-control" id="registerSecondsname" placeholder="Apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Cargo</label>
                <br>
                <input type="text" class="form-control" id="registerCarge" placeholder="Cargo" name="cargo" required>
            </div>
            <div class="mb-3">
                <label for="registerEmail" class="form-label">Correo electrónico</label>
                <br>
                <input type="email" class="form-control" id="registerEmail" placeholder="ejemplo@correo.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Telefono</label>
                <br>
                <input type="text" class="form-control" id="registerTel" placeholder="Telefono" name="nombres" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Telefono Contacto</label>
                <br>
                <input type="text" class="form-control" id="registerContactphone" placeholder="Tel. Contacto" name="contacto" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">EPS</label>
                <br>
                <input type="text" class="form-control" id="registerEPS" placeholder="Nombre EPS" name="eps" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">ARL</label>
                <br>
                <input type="text" class="form-control" id="registerARL" placeholder="Nombre ARL" name="arl" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Caja compensación</label>
                <br>
                <input type="text" class="form-control" id="registerCaja" placeholder="Caja compensación" name="cajacompensacion" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Fondo de pensión</label>
                <br>
                <input type="text" class="form-control" id="registerPension" placeholder="Fondo pensión" name="pension" required>
            </div>
            <div class="mb-3">
                <label for="registerName" class="form-label">Fecha Ingreso</label>
                <br>
                <input type="date" class="form-control" id="dateadmission" placeholder="Fecha de ingreso" name="ingreso" required>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
            </div>
        </form>



    </div>
</div>