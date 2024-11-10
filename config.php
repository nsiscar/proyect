<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "mi_portafolio";

$conexion = new mysqli($servidor, $usuario, $password, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
