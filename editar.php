<?php
$data = json_decode(file_get_contents("drones.json"), true);
$id = intval($_GET['id']);
foreach ($data as $dron) {
  if ($dron['id'] == $id) {
    $d = $dron;
    break;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editar</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h1>Modificar</h1>
  <a href="index.php">Cancelar</a>
  <form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">
    Modelo*: <input name="modelo" value="<?= $d['modelo'] ?>" required><br>
    Marca*: <input name="marca" value="<?= $d['marca'] ?>" required><br>
    Capacidad*: <input name="capacidad" value="<?= $d['capacidad'] ?>" required><br>
    <button type="submit">Guardar</button>
  </form>

  <!-- Botón que muestra el modal -->
  <button type="button" onclick="mostrarModal()">Eliminar</button>

  <!-- Modal flotante -->
  <div id="modalEliminar" class="modal">
    <div class="modal-contenido">
      <p>¿Estás seguro de que quieres eliminar este dron?</p>
      <form action="eliminar.php" method="POST">
        <input type="hidden" name="id" value="<?= $d['id'] ?>">
        <button type="submit">Sí, eliminar</button>
        <button type="button" onclick="cerrarModal()">Cancelar</button>
      </form>
    </div>
  </div>

  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
    }
    .modal-contenido {
      background: white;
      margin: 15% auto;
      padding: 20px;
      width: 300px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 0 10px #333;
    }
  </style>

  <script>
    function mostrarModal() {
      document.getElementById("modalEliminar").style.display = "block";
    }
    function cerrarModal() {
      document.getElementById("modalEliminar").style.display = "none";
    }
  </script>
</body>
</html>
