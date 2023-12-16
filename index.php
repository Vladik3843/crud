<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD LISIV</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/functions.js"></script>
</head>
<body style="background-color: #000000; color:white;">
<?php

require_once "conexion.php";

?>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre"><br />
    <input type="text" name="appat" id="appat"  placeholder="Apellido Paterno"><br />
    <input type="text" name="apmat" id="apmat" placeholder="Apellido Materno"><br />
    <input type="text" name="rfc" id="rfc" placeholder="RFC"><br />
    <input type="text" name="domiclio" id="domicilio" placeholder="Domicilio"><br />
    <input type="text" name="tel" id="tel" placeholder="Telefono"><br />
    <input type="text" name="mail" id="mail" placeholder="Correo electronico"><br />
    <button onclick="guardarCrud()">Guardar</button>
    <div id="info"></div>
</body>
</html>