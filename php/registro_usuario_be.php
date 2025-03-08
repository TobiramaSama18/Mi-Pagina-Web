<?php 

    session_start();

    include 'conexion_be.php';

    $nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $contracena = mysqli_real_escape_string($conexion, $_POST['contracena']);

    // Encriptar contraseña con SHA-512
    $contracena = hash('sha512', $contracena);

    // Verificar si el correo ya existe
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script>
                alert("Este correo ya está registrado. Intenta iniciar sesión.");
                window.location = "../login.php";
              </script>';
        exit();
    }

    // Verificar si el usuario ya existe
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
                alert("Este usuario ya está registrado. Intenta iniciar sesión.");
                window.location = "../login.php";
              </script>';
        exit();
    }

    // Insertar usuario
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contracena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contracena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script>
                alert("Usuario registrado exitosamente.");
                window.location = "../index.html";
              </script>';
    } else {
        echo '<script>
                alert("Error al registrar usuario. Inténtalo de nuevo.");
                window.location = "../login.php";
              </script>';
    }

    mysqli_close($conexion);
    exit();
?>
