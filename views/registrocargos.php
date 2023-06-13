<!DOCTYPE html>
<html>

<head>
    <title>Registro de Cargos</title>
</head>

<div class="tab-pane fade" id="register">
    <h3 class="mb-4">Registro cargos</h3>

    <?php
    include '../controller/conexion.php';

    if (isset($_POST['registrar'])) {
        $cargo = $_POST['cargo'];
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
    <h2>Registro de Cargos</h2>
    <form method="post" action="registro_cargos_controller.php">
        <div>
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>
        </div>
        <div>
            <label for="tipocontrato">Tipo de Contrato:</label>
            <input type="text" id="tipocontrato" name="tipocontrato" required>
        </div>
        <div>
            <label for="salariobruto">Salario Bruto:</label>
            <input type="number" id="salariobruto" name="salariobruto" required>
        </div>
        <div>
            <label for="recargos">Recargos:</label>
            <input type="number" id="recargos" name="recargos" required>
        </div>
        <div>
            <label for="prestaciones">Prestaciones:</label>
            <input type="number" id="prestaciones" name="prestaciones" required>
        </div>
        <div>
            <label for="salarioneto">Salario Neto:</label>
            <input type="number" id="salarioneto" name="salarioneto" required>
        </div>
        <div>
            <button type="submit" name="registrar">Registrar</button>
        </div>
    </form>
</body>

</html>