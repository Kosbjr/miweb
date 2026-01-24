<?php
session_start();

// Recuperamos el saludo guardado en sesión, si existe
$saludo = $_SESSION['saludo'] ?? '';
echo $error;
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienvenidos a mi Página</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
  <img src="imagenes/img1.png" alt="" id="imgs">
  <h1>Bienvenidos a mi web</h1>

  <div class="form-group">
    <!-- Formulario POST a saludo.php -->
    <form method="post" action="saludo.php">
      <input type="text" name="nombre" required>
      <input type="submit" value="Enviar">
    </form>
  </div>

  <!-- Mostramos el saludo guardado en sesión -->
  <p id="saludo"><?php echo $saludo; ?></p>

  <p>Última actualización: <strong id="time"></strong></p>
  <br>
</div>

<script src="script.js"></script>
</body>
</html>
