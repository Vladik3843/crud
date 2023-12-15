<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD LISIV</title>
</head>
<body style="background-color: #000000; color:white;">
<?php

require_once "conexion.php";

$query="select * from empleado";
$resultado=mysqli_query($dbcon,$query);
//var_dump($resultado);
while($datos=mysqli_fetch_array($resultado)){
    echo $datos['nombre']."<br />";
    echo $datos['appat']."<br />";
    echo $datos['apmat']."<br />";
}
?>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input type="text" name="appat" id="appat"  placeholder="Apellido Paterno">
    <input type="text" name="apmat" id="apmat" placeholder="Apellido Materno">
    <button>Guardar</button>
</body>
</html>