<?php
// Variable para el saludo
$saludo = "";

// Si viene un POST, generamos el saludo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $saludo = "¡Hola $nombre, Bienvenido a Mi Web!";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $saludo = "Introduce un nombre válido";
}
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
    <form method="post" action="">
      <input type="text" name="nombre" required>
      <input type="submit" value="Enviar">
    </form>
  </div>

  <p id="saludo">
    <?php echo $saludo; ?>
  </p>

  <p>Última actualización: <strong id="time"></strong></p>
  <br>
</div>

<script src="script.js"></script>
</body>
</html>
