<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $mensaje = "¡Hola $nombre, Bienvenido a Mi Web!";
} else {
    $mensaje = "Introduce un nombre válido";
}

// Redirigimos a index.php pasando el mensaje como GET **temporal**
// No es sensible, solo texto visible
header("Location: index.php?mensaje=" . urlencode($mensaje));
exit;
