<!DOCTYPE html>
<html>

<head>
    
</head>

<div class="tab-pane fade" id="register">
    <h3 class="mb-4">Registro cargos</h3>

    <?php
    include '../controller/conexion.php';

    if (isset($_POST['registrar'])) {
        $cargo = $_POST['cargo'];
        $area = $_POST['area'];
        $tipocontrato = $_POST['tipocontrato'];
        $salariobruto = $_POST['salariobruto'];
        $recargos = $_POST['recargos'];
        $prestaciones = $_POST['prestaciones'];
        $salarioneto = $_POST['salarioneto'];

        $insert = mysqli_query($con, "INSERT INTO cargos (cargo, tipocontrato, salariobruto, recargos, prestaciones, salarioneto)
                                 VALUES ('$cargo', '$tipocontrato', '$salariobruto', '$recargos', '$prestaciones', '$salarioneto')");

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

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Registro de Cargos</h1>
                <form method="post" action="registro_cargos_controller.php">
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Área:</label>
                        <input type="text" class="form-control" id="area" name="area" required>
                    </div>
                    <div class="form-group">
                        <label for="tipocontrato">Tipo de Contrato:</label>
                        <input type="text" class="form-control" id="tipocontrato" name="tipocontrato" required>
                    </div>
                    <div class="form-group">
                        <label for="salariobruto">Salario Bruto:</label>
                        <input type="number" class="form-control" id="salariobruto" name="salariobruto" required>
                    </div>
                    <div class="form-group">
                        <label for="recargos">Recargos:</label>
                        <input type="number" class="form-control" id="recargos" name="recargos" required>
                    </div>
                    <div class="form-group">
                        <label for="prestaciones">Prestaciones:</label>
                        <input type="number" class="form-control" id="prestaciones" name="prestaciones" required>
                    </div>
                    <div class="form-group">
                        <label for="salarioneto">Salario Neto:</label>
                        <input type="number" class="form-control" id="salarioneto" name="salarioneto" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>