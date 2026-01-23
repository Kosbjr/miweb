<?php
if (isset($_POST['nombre']) && $_POST['nombre'] != "") {
    $nombre = htmlspecialchars($_POST['nombre']);
    echo "¡Hola, $nombre! 👋 Bienvenido a la web.";
} else {
    echo "Por favor, introduce un nombre.";
}
?>