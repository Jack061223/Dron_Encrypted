<?php
$data = json_decode(file_get_contents("drones.json"), true);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Acceso a base de datos</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h1>Acceso a base de datos</h1>
  <a href="agregar.php">Agregar</a><br><br>
  <?php foreach ($data as $d): ?>
    <a href="editar.php?id=<?= $d['id'] ?>"><?= htmlspecialchars($d['modelo']) ?></a><br>
    Marca: <?= htmlspecialchars($d['marca']) ?><br>
    Capacidad: <?= htmlspecialchars($d['capacidad']) ?><br><br>
  <?php endforeach; ?>
</body>
</html>
