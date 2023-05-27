<?php
include 'conexion.php';
if(isset($_POST['signin'])){
$nombre=$_POST['nombre']; //escampar el input en una variable    
$identificacion=$_POST['identificacion'];
$email=$_POST['email'];
$password=$_POST['password'];
$estado="ACTIVO";
$fechacreacion= date("Y-m-d");

$insert=mysqli_query($con,"INSERT INTO empleados(nombre,identificacion,email,password,estado,fecha_creacion)
VALUES ('$nombre','$identificacion','$email','$password','$estado','$fechacreacion')");

if($insert){
    echo '<div class="alert alert-succer" role="alert">
    DATOS GUARDADOS CON EXITO
    <a href="../index.php" class="btn btn-warning">REGRESAR AL INICIO </a>
    </div>';
}else{
    echo "error al guardar";
}
}
?>