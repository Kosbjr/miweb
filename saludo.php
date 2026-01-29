<?php
session_start();
include "conexion.php";

if (isset($_POST['nombre']) && $_POST['nombre'] != "") {

    $nombre = htmlspecialchars($_POST['nombre']);

    // Buscar usuario
    $sql = "SELECT visitas FROM usuarios WHERE nombre = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $visitas = $fila['visitas'] + 1;

        $update = "UPDATE usuarios SET visitas = ? WHERE nombre = ?";
        $stmt2 = $conn->prepare($update);
        $stmt2->bind_param("is", $visitas, $nombre);
        $stmt2->execute();
    } else {
        $visitas = 1;
        $insert = "INSERT INTO usuarios (nombre, visitas) VALUES (?, ?)";
        $stmt2 = $conn->prepare($insert);
        $stmt2->bind_param("si", $nombre, $visitas);
        $stmt2->execute();
    }

    // Saludo aleatorio
    $saludoSQL = "SELECT mensaje FROM saludos ORDER BY RAND() LIMIT 1";
    $saludoResult = $conn->query($saludoSQL);
    $saludo = $saludoResult->fetch_assoc()['mensaje'];

    // Guardamos el saludo en sesión
    $_SESSION['saludo'] = "$saludo<br>Hola <strong>$nombre</strong>, has visitado esta página <strong>$visitas</strong> veces.";

}

// Volvemos al index
header("Location: index.php");
exit;
