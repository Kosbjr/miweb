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
    <!-- Formulario POST al otro archivo -->
    <form method="post" action="saludo.php">
      <input type="text" name="nombre" required>
      <input type="submit" value="Enviar">
    </form>
  </div>

  <!-- Aquí mostraremos el saludo si viene por GET (temporal) -->
  <p id="saludo">
    <?php
      if (isset($_GET['mensaje'])) {
          echo htmlspecialchars($_GET['mensaje']);
      }
    ?>
  </p>

  <p>Última actualización: <strong id="time"></strong></p>
  <br>
</div>

<script src="script.js"></script>
</body>
</html>
