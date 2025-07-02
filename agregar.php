<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Agregar</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h1>Agregar dron</h1>
  <a href="index.php">Cancelar</a>
  <form action="guardar.php" method="POST">
    Modelo*: <input name="modelo" required><br>
    Marca*: <input name="marca" required><br>
    Capacidad*: <input name="capacidad" required><br>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>
