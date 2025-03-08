<?php
session_start();
session_destroy();
header("Location: ../index.php"); // Redirige al inicio después de cerrar sesión
exit();
?>
