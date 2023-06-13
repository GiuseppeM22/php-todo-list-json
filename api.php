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

    }   else if( isset($_POST['deleteAll']) ) {

        $todoListDati = [];
        file_put_contents("dati.json", json_encode($todoListDati) );

    }   else if( isset($_POST['deleteSingol'] )) {

        $indice = $_POST['deleteSingol'];

        array_splice($todoListDati, $indice, 1);
        file_put_contents("dati.json", json_encode($todoListDati) );
    
    }   else if( isset($_POST['edittext'] )) {

        $indice = $_POST['indice'];
        $textEdit = $_POST['edittext'];
        $todoListDati[$indice]["list"] = $textEdit;

        file_put_contents("dati.json", json_encode($todoListDati) );
    }

$todoList = json_encode($todoListDati);


echo $todoList;


?>