<?php
$servername = "localhost"; //ip o url del servidor
$database = "lisiv"; //nombre de la BD
$username = "lisiv"; //usuario de la BD
$password = "Lisiv123@"; //pass del usuario de la BD
// Create connection
$dbcon = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$dbcon) {
    die("Falló la conexión: " . mysqli_connect_error());
}
//echo "Conectado";
?>