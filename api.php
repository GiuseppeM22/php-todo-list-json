<?php 

$lista = [
    "0" => "spesa",
    "1" => "cena",
    "2" => "lavatrice",
    "3" => "vacanza",
    "4" => "mare",
];

header('Content-Type: application/json');

$todo = json_encode($lista);

echo $todo;
?>