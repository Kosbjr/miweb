<?php
if (!empty($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    header("Location: index.php?saludo=¡Hola+$nombre, Bienvenido a Mi Web!");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>