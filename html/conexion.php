<?php
$host = "localhost";
$usuario = "root";
$contraseña = "roni12345678";
$baseDatos = "noticia_1";
$puerto = "3306"; // Cambia al puerto que necesitas

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $baseDatos, $puerto);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>