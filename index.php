<?php
// Iniciar la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/icono.png">
    <title>Mr Robot Block</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Mr Robot</a>
            <input type="checkbox" id="menu">
            <label for="menu"><img src="imagenes/menu.png" class="menu-icono" alt="Menú"></label>
            <nav class="navbar">
                <ul>
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Iniciar Sesión</a></li>
                    <?php endif; ?>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Horario</a></li>
                    <li><a href="#">Sistemas</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-info">
                <h1>Block Mr Robot</h1>
                <p>Aquí encontrarás memes, ejercicios y más. ¡No te lo pierdas!</p>
                <a href="#" class="btn-1">Comienza</a>
            </div>
        </div>
    </header>

    <section class="Gym container">
        <div class="Gym-1">
            <h2><span>Calistenia</span> Funcional</h2>
            <p>Comencé a practicar calistenia desde el año pasado y hoy me siento mucho mejor. Se los recomiendo, por aquí les pasaré algunas rutinas día a día.</p>
            <a href="Rutinas.php" class="btn-2">Ver rutinas</a>
        </div>

        <div class="Gym-2">
            <img class="img-1" src="imagenes/bandera calistenia.jpg" alt="Ejercicio">
            <img class="img-2" src="imagenes/fullplanche.png" alt="Ejercicio avanzado">
        </div>
    </section>

    <section class="Gym container">
        <div class="Gym-2">
            <img class="img-1" src="imagenes/sistemas.jpg" alt="Sistemas">
            <img class="img-2" src="imagenes/por-que-formarse-en-ciberseguridad-itop-academy.jpg" alt="Ciberseguridad">
        </div>

        <div class="Gym-1">
            <h2><span>Ingeniería</span> Sistemas e Informática</h2>
            <p>Comencé este viaje en el mundo de la programación y la ciberseguridad, un mundo muy emocionante. Desde pequeño me interesaron las computadoras y hoy en día curso el 4to ciclo de la carrera.</p>
            <a href="contactanos.html" class="btn-2">Contactar</a>          
        </div>
    </section>

    <section class="Gym container">
        <div class="Gym-1">
            <h2><span>Música</span> "Guitarra"</h2>
            <p>Otro de mis amores. Tocar la guitarra es crear melodía desde la nada. Aprender cada acorde y arpegio es una gran terapia para el corazón.</p>
            <a href="#" class="btn-2">Ver tablaturas</a>
        </div>

        <div class="Gym-2">
            <img class="img-1" src="imagenes/musica.jpg" alt="Música">
            <img class="img-2" src="imagenes/images.jpeg" alt="Guitarra">
        </div>
    </section>

    <footer class="footer container">
        <h3>Logo</h3>
        <div class="links">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Información</a></li>
                <li><a href="contactanos.html">Contacto</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
