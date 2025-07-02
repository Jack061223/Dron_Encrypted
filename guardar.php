<?php
$data = json_decode(file_get_contents("drones.json"), true);
$id = count($data) > 0 ? end($data)['id'] + 1 : 1;
$data[] = [
  "id" => $id,
  "modelo" => $_POST['modelo'],
  "marca" => $_POST['marca'],
  "capacidad" => $_POST['capacidad']
];
file_put_contents("drones.json", json_encode($data, JSON_PRETTY_PRINT));
header("Location: index.php");
?>
