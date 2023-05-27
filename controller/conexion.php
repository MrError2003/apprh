<?php
$host="localhost";
$user="root";
$pass="";
$dbName="rh";

$con=mysqli_connect($host, $user, $pass, $dbName);

date_default_timezone_set("America/Bogota");

if(mysqli_connect_errno()){
    echo 'error de conexion a la base de datos'; 
}
?>