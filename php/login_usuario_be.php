<?php
session_start();
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos están en POST
    if (!isset($_POST['correo']) || !isset($_POST['contracena'])) {
        echo '<script>
                alert("Error: Datos no recibidos correctamente.");
                window.location = "../login.php";
              </script>';
        exit();
    }

    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contracena = mysqli_real_escape_string($conexion, $_POST['contracena']);

    // Encriptar la contraseña
    $contracena = hash('sha512', $contracena);

    // Ejecutar la consulta
    $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contracena = '$contracena'";
    $resultado = mysqli_query($conexion, $query);

    // Verificar si hubo un error en la consulta
    if (!$resultado) {
        echo '<script>
                alert("Error en la consulta: ' . mysqli_error($conexion) . '");
                window.location = "../login.php";
              </script>';
        exit();
    }

    // Verificar si encontró el usuario
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['usuario'] = $correo;
        header("Location: ../index.php");
        exit();
    } else {
        echo '<script>
                alert("Usuario no existe. Verifique los datos introducidos");
                window.location = "../login.php";
              </script>';
        exit();
    }
}
?>
