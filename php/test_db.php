<?php
$conexion = mysqli_connect("192.168.0.5", "Mr_Robot", "123456", "login_register_db");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios");

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Usuario: " . $fila['usuario'] . "<br>";
}

mysqli_close($conexion);
?>
