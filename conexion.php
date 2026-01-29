<?php
$host = "localhost";
$db = "visitas_web";
$user = "webadmin";
$pass = "MesaMorada";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
