<?php
require_once "../conexion.php";

$nombre = $_GET['nombre'];
$appat = $_GET['appat'];
$apmat = $_GET['apmat'];
$rfc = $_GET['rfc'];
$domicilio = $_GET['domicilio'];
$tel = $_GET['tel'];
$mail = $_GET['mail'];

$insert_query = "insert into empleado (nombre, appat, apmat, rfc, domicilio, tel, mail) values ('$nombre','$appat', '$apmat','$rfc','$domicilio','$tel','$mail')";
//$insert_query;
mysqli_query($dbcon,$insert_query);






?>