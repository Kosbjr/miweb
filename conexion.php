<?php
$host = "localhost";
$user = "adminweb";
$pass = "MesaMorada";
$db = "visitas_web";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
