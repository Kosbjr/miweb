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
      <form action="saludo.php" method="post">
        <input type="text" name="nombre">
        <input type="submit" name="enviar" value="Enviar">
      </form>
    </div>

    <p id="saludo">
  <?php
    if (isset($_POST['saludo'])) {
        echo $_POST['saludo'];
    }
  ?>
</p>
    <p>Última actualización: <strong id="time"></strong></p>
    <br>
    
  </div>

  <script src="script.js"></script>
</body>
</html>