<?php
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'bdjhonatan';

$conexion = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
