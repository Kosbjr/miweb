<?php
session_start();

// Solo aceptamos POST y un nombre no vacío
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $_SESSION['saludo'] = "¡Hola $nombre, Bienvenido a Mi Web!";
} else {
    $_SESSION['saludo'] = "Introduce un nombre válido";
}

// Redirigimos de vuelta a index.php
header("Location: index.php");
exit;
