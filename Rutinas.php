<?php
session_start();

// Si el usuario no ha iniciado sesión, lo redirige al login
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Debes iniciar sesión para ver esta página.");
        window.location = "login.php";
    </script>
    ';
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Rutinas</title>
    <link rel="icon" href="imagenes/icono.png">
</head>
<body>

    <header>
        <div>
            <h1>Mis Rutinas</h1>
            <p>Aquí puedes ver tus rutinas personalizadas.</p>
            <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
        </div>
    </header>

</body>
</html>
