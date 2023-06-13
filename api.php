<?php 

header('Content-Type: application/json');
$todoList = file_get_contents("dati.json");
$todoListDati = json_decode($todoList, true);


if( isset($_POST['newTask']) ) {

    $object = $_POST['newTask'];

    $newTask = array (
        "list" => $object,
        "status" => true
    );

    $todoListDati[] = $newTask;
    file_put_contents("dati.json", json_encode($todoListDati) );
}

$todoList = json_encode($todoListDati);


echo $todoList;

?>