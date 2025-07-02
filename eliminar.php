<?php
$data = json_decode(file_get_contents("drones.json"), true);
$data = array_filter($data, fn($dron) => $dron['id'] != intval($_POST['id']));
file_put_contents("drones.json", json_encode(array_values($data), JSON_PRETTY_PRINT));
header("Location: index.php");
?>
