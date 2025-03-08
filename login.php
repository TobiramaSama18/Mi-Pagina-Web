<?php 
    session_destroy();
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/91a3f1e2cb.js" crossorigin="anonymous"></script>
    <link rel="icon" href="imagenes/icono.png">
</head>
<body>
    <div>

    </div>
    <main>


        <div class="contenedor__todo">

            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesion Para Acceder</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>  ¿Aun no tienes una cuenta?</h3>
                    <p>  Registrate Para Iniciar Sesion</p>
                    <button id="btn__registrarse">Registrate</button>
                </div>
            </div>

            <!-- Este es el formulario de registro y iniciar sesion -->

            <div class="contenedor__login-register">

                <form action ="php/login_usuario_be.php" method = "POST"  class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                        <input type="email" required placeholder="Correo Electronico" name = "correo">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="password" required placeholder="Contraceña" name="contracena">
                        <i class="fa-solid fa-key"></i>
                    <button type="submit" class="entrar">Iniciar Sesion</button>
                </form>

                <form action ="php/registro_usuario_be.php" method = "POST" class="formulario__register">
                    <h2>Registrarse</h2>
                        <input type="text" required placeholder="Nombre y apellidos" name = "nombre_completo">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" required placeholder="Correo Electronico" name = "correo">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" required placeholder="Nombre de Usuario" name = "usuario">
                        <i class="fa-solid fa-circle-user"></i>
                        <input type="password" required placeholder="Contraceña" name = "contracena">
                        <i class="fa-solid fa-key"></i>
                        <br>
                    <button type="submit" class="Registrarse">Registrarse</button>
                </form>
            </div>

        </div>
        
    </main>

    <script src="js/scrip.js"></script>
    
</body>
</html>