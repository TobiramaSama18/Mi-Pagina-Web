<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "192.168.0.5";  // IP de tu PC
$user = "Mr_Robot";         // Usuario de MySQL
$pass = "123456";             // Contraseña de MySQL (déjala vacía si no tienes)
$db = "login_register_db";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa";
?>
