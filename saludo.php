<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $_SESSION['saludo'] = "¡Hola " . htmlspecialchars($nombre) . ", Bienvenido a Mi Web!";
} else {
    $_SESSION['saludo'] = "Introduce un nombre";
}

header("Location: index.php");
exit;
