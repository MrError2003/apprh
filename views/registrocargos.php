<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cargos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="tab-pane fade" id="register">
            <h3 class="mb-4">Registro cargos</h3>
            <?php
            include '../controller/conexion.php';

            if (isset($_POST['calcular'])) {
                $salariobruto = $_POST['salariobruto'];
                $recargos = $_POST['recargos'];
                $prestaciones = $salariobruto * 0.96;
                $salarioneto = $salariobruto - $prestaciones + $recargos;
            } elseif (isset($_POST['registrar'])) {
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
                <select class="form-control" id="tipocontrato" name="tipocontrato" required>
                    <option selected>Seleccione tipo de contrato</option>
                    <option value="Fijo">Termino fijo</option>
                    <option value="Indefinido">Termino indefinido</option>
                    <option value="Obra o labor">Obra o labor</option>
                    <option value="Medio tiempo">Medio tiempo</option>
                    <option value="Practicante">Practicante</option>
                    <option value="Pasantia">Pasantia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salariobruto">Salario Bruto:</label>
                <input type="number" class="form-control" id="salariobruto" name="salariobruto" required>
            </div>
            <div class="form-group">
                <label for="prestaciones">Prestaciones:</label>
                <input type="number" class="form-control" id="prestaciones" name="prestaciones" value="<?php echo isset($prestaciones) ? $prestaciones : ''; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="recargos">Recargos:</label>
                <input type="number" class="form-control" id="recargos" name="recargos" required>
            </div>
            <div class="form-group">
                <label for="salarioneto">Salario Neto:</label>
                <input type="number" class="form-control" id="salarioneto" name="salarioneto" value="<?php echo isset($salarioneto) ? $salarioneto : ''; ?>" readonly>
            </div>
            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
            <button type="submit" class="btn btn-success" name="registrar">Registrar cargo</button>
            <br>
            <br>
            <br>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
