<?php
$data = json_decode(file_get_contents("drones.json"), true);
foreach ($data as &$dron) {
  if ($dron['id'] == intval($_POST['id'])) {
    $dron['modelo'] = $_POST['modelo'];
    $dron['marca'] = $_POST['marca'];
    $dron['capacidad'] = $_POST['capacidad'];
    break;
  }
}
file_put_contents("drones.json", json_encode($data, JSON_PRETTY_PRINT));
header("Location: index.php");
?>
