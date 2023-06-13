<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../controller/head.php';
    include '../controller/conexion.php';
    ?>

</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nomina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <form class="row g-3" method="post">
                <div class="col-12">
                    <label for="inputCargoId" class="form-label">ID del cargo</label>
                    <input type="number" class="form-control" id="inputCargoId" name="cargoId" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Salario bruto</label>
                    <input type="number" class="form-control" id="inputEmail4" name="salario" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Auxilio transporte</label>
                    <input type="number" class="form-control" id="inputAddress" name="auxilio" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Horas extras</label>
                    <input type="number" class="form-control" id="inputAddress2" name="horasExtras" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btn_cacular">Calcular</button>
                </div>
            </form>

            <?php

            if (isset($_POST['btn_cacular'])) {
                $salario = $_POST['salario'];
                $auxilio = $_POST['auxilio'];
                $horasExtras = $_POST['horasExtras'];
                $prestaciones = 0.96;

                $salario_neto = ($salario *  $prestaciones) + $auxilio + $horasExtras;

                echo 'El salario Neto es: ', $salario_neto;
            }
            ?>

        </div>
    </div>



</body>

<?php
include '../controller/scripts.php';
?>

</html>